<?php
namespace App\Services;
use Exception;
use Illuminate\Support\Facades\Log;

class ImageService
{
    public function compressAndStoreImage($image, $uniqueSlug, $type)
    {
        // Remova o perfil de cor incorreto ao ler a imagem
        $imageContent = file_get_contents($image->getRealPath());
        $compressedImage = @imagecreatefromstring($imageContent);

        if (!$compressedImage) {
            throw new \Exception('Failed to create image from string.');
        }

        $extension = 'webp'; // or any other desired extension
        $filename = $uniqueSlug . '.' . $extension;

        // Determine save path based on the type
        switch ($type) {
            case 'product':
                $savePath = public_path('product-image/' . $filename);
                break;
            case 'collection':
                $savePath = public_path('collection-image/' . $filename);
                break;
            case 'slider':
                $savePath = public_path('product-slider-images/' . $filename);
                break;
            default:
                $savePath = public_path('upload-image/' . $filename);
                break;
        }

        // Certifique-se de que o diretório existe
        $directory = dirname($savePath);
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        // Tente salvar a imagem
        try {
            imagewebp($compressedImage, $savePath, 45); // Adjust quality as needed
        } catch (Exception $e) {
            // Log the error message
            Log::error('Failed to save image: ' . $e->getMessage());
            throw new \Exception('Failed to save image.');
        }

        imagedestroy($compressedImage);

        return $filename;
    }

    public function convert($image, $uniqueSlug, $type, $path, $extension)
    {
        // Check if image is valid
        $compressedImage = imagecreatefromstring(file_get_contents($image->getRealPath()));
        if (!$compressedImage) {
            // Handle the error or return false
            return false;
        }
        // Set default extension
        if (!$extension) {
            $extension = 'webp';
        }
        $filename = $uniqueSlug . '.' . $extension;
        // Determine save path based on the type
        $savePath = public_path($path . '/' . $type . '/' . $filename);
        // Ensure directory exists
        $directory = dirname($savePath);
        if (!file_exists($directory)) {
            if (!mkdir($directory, 0755, true)) {
                // Handle directory creation failure
                return false;
            }
        }
        imagewebp($compressedImage, $savePath, 100); // Adjust quality as needed
        imagedestroy($compressedImage);
        return $filename;
    }
}

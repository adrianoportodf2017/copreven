<?php

// Define a codificação de caracteres como UTF-8
header('Content-Type: text/html; charset=UTF-8');
// Inclua outros códigos PHP abaixo desta linha
include_once (dirname(__DIR__). '/config/config.php');
// Arquivo: autoload.php

// Função para carregar arquivos de funções padrões e repetitivas
function autoload($dir) {
    // Verifica se o diretório existe
    if (is_dir($dir)) {
        // Abre o diretório
        if ($dh = opendir($dir)) {
            // Percorre os arquivos no diretório
            while (($file = readdir($dh)) !== false) {
                // Verifica se é um arquivo PHP e se não é o diretório atual ou o pai
                if (pathinfo($file, PATHINFO_EXTENSION) == 'php' && $file != '.' && $file != '..') {
                    // Inclui o arquivo
                    include_once $dir . '/' . $file;
                }
            }
            // Fecha o diretório
            closedir($dh);
        }
    } else {
        echo "O diretório $dir não existe.";
    }
}

// Diretório onde estão localizados os arquivos de funções (diretório atual)
$functions_dir = dirname(__FILE__);

// Carrega os arquivos de funções do diretório especificado
autoload($functions_dir);
?>

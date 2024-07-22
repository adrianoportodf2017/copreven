<?php
// Certifique-se de que não há espaço em branco antes deste ponto
session_start();
header('Content-Type: text/html; charset=UTF-8');
include_once("includes/autoload.php");
date_default_timezone_set('America/Sao_Paulo');
// Verifica se o usuário está logado
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['user'];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Controle de Atendimento | PREVEN</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monda&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/92f06b8bd3.js"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light d-flex justify-content-between">
    <a href="<?= base_url() ?>"><img src="http://copreven.com.br/sistema/app/images/logo1.png" width="300px"></a>
    <div>
        <span style="color: #000080; font-family: 'Alegreya Sans', sans-serif; font-size: 17px;">
            <i class="far fa-user" style="color: #000080"></i>
            Bem-vindo(a), <?= htmlspecialchars($user['name']); ?>
        </span>
        <a href="logout.php" class="btn btn-danger btn-sm ml-3">Logout</a>
    </div>
</nav>

<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

function connect() {
    require (dirname(__DIR__). '/config/config.php');
    // TENTA ESTABELECER A CONEXAO
    $connect = mysqli_connect($hostname, $usuario, $senha);
    // CONSEGUIU CONECTAR?
    if (!$connect) {
        die(trigger_error("Não foi possível estabelecer a conexão: " . mysqli_connect_error()));
        return false;
    } else {
        // TENTA SELECIONAR BANCO DE DADOS
        $db = mysqli_select_db($connect, $banco);
        // SELECIONOU O BANCO ?
        if (!$db) {
            die(trigger_error("Não foi possível selecionar o banco: " . mysqli_error($connect)));
            return false;
        } else {
            return $connect;
        }
    }
}




 /* function connect($banco = "clime938_copreven", $usuario = "clime938_copreve", $senha = "copreven102030", $hostname = "www.copreven.com.br") {
    // TENTA ESTABELECER A CONEXAO
    $connect = mysqli_connect($hostname, $usuario, $senha);
    // CONSEGUIU CONECTAR?
    if (!$connect) {
        die(trigger_error("Não foi possível estabelecer a conexão: " . mysqli_connect_error()));
        return false;
    } else {
        // TENTA SELECIONAR BANCO DE DADOS
        $db = mysqli_select_db($connect, $banco);
        // SELECIONOU O BANCO ?
        if (!$db) {
            die(trigger_error("Não foi possível selecionar o banco: " . mysqli_error($connect)));
            return false;
        } else {
            return $connect;
        }
    }
}*/

?>

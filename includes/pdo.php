<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
require (dirname(__DIR__). '/config/config.php');
try {
   $pdo = new PDO("mysql:host=$hostname;dbname=$banco", $usuario, $senha, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   //echo 'Conexao efetuada com sucesso!';
}catch(PDOException $e){
   echo $e->getMessage();
}       

?>
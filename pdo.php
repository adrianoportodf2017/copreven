<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

   $hostname = 'localhost'; 
   $username = 'root';
   $password = '';
   $database = 'copreven';
 
try {
   $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   //echo 'Conexao efetuada com sucesso!';
}catch(PDOException $e){
   echo $e->getMessage();
}       

?>
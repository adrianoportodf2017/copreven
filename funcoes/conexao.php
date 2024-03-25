<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);



function connect($banco="clime938_copreven",$usuario="clime938_coprev",$senha="copreven102030",$hostname="www.copreven.com.br"){

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$conexao = mysql_connect("www.copreven.com.br","clime938_copreve","copreven102030");
return mysql_select_db("clime938_copreven");
}

?>
<?php

include_once("./includes/autoload.php");

$msg    = "99";
$dia    = date('d');
$mes    = date('m');
$ano    = date('Y');

$consulta = select("convenio", "*", "WHERE nome LIKE '%'", "ORDER BY nome ASC");
$clinico  = select("atendimento", "*", "WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id ASC");
$clinico2 = select("atendimento", "*", "WHERE mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id ASC");
$fila = select("atendimento", "*", "WHERE dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND hr_saida LIKE 'AGUARDANDO'", "ORDER BY id ASC");

$t_clinico = $clinico ? count($clinico) : '0';
$t_clinico2 = $clinico2 ? count($clinico2) : '0';
$t_fila = $fila ? count($fila) : '0' ;

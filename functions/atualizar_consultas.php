<?php
include("../includes/autoload.php");
$dia                = date('d');
$mes                = date('m');
$ano                = date('Y');
$consultorio = $_GET['consultorio'];
$consulta = select("atendimento", "*", "WHERE $consultorio LIKE 'A' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%'", "ORDER BY id ASC");


if ($consulta == true) {
    for ($i = 0; $i < count($consulta); $i++) {
?>

        <ul class="list-group">
            <li class="list-group-item">
                <div class="btn-group">
                <?php if ($consulta[$i]['status'] == '1' && $consulta[$i]['consultorio_atendimento'] == $consultorio) { ?>
                <button class="btn btn-primary bg-gray" onclick="confirmar_atendimento('<?php echo $consulta[$i]['id'] ?>', '<?= $consultorio ?>')">
                    <span class="text-white">CONFIRMAR ATENDIMENTO</span>
                </button>
                <?php } if ($consulta[$i]['status'] == '1') { ?>
                    <button class="btn btn-danger" disabled>
                        <span class="text-light">EM ATENDIMENTO SALA: <?= $consulta[$i]['consultorio_atendimento']?></span>
                    </button> 
                <?php } else { ?>
                    <button class="btn btn-success status_atendimento" onclick="status_atendimento('<?php echo $consulta[$i]['id'] ?>', 1, '<?= $consultorio ?>')" >
                        <span class="text-light">ATENDER PACIENTE</span>
                    </button>
                <?php  } ?>
                </div> 
                <hr>
                <?php echo $consulta[$i]['id'] ?> |
                <?php echo $consulta[$i]['nome'] ?><br>
                <?php echo $consulta[$i]['tipo'] ?> |
                Convênio: <?php echo $consulta[$i]['convenio'] ?> <br>
                Empresa: <?php echo $consulta[$i]['empresa'] ?> <br>
                Nasc: <?php echo $consulta[$i]['nascimento'] ?> |
                Doc: <?php echo $consulta[$i]['rg'] ?> |
                Função: <?php echo $consulta[$i]['cargo'] ?>
            </li>
        </ul>

<?php
    }
} else {
    echo "Nenhum dado encontrado!";
}
?>
</div>

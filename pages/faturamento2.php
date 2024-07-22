<?php
 
include("../header.php");

$convenio = isset($_GET["convenio"]) ? $_GET["convenio"] : '';
$dia = isset($_GET["dia"]) ? $_GET["dia"] : '';
$mes = isset($_GET["mes"]) ? $_GET["mes"] : '';
$ano = isset($_GET["ano"]) ? $_GET["ano"] : '';
$empresa = isset($_GET["empresa"]) ? $_GET["empresa"] : '';
$tipo = isset($_GET["tipo"]) ? $_GET["tipo"] : '';
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';


$consulta = select("atendimento", "*", "WHERE convenio LIKE '%$convenio%' AND dia LIKE '%$dia%' AND mes LIKE '%$mes%' AND ano LIKE '%$ano%' AND empresa LIKE '%$empresa%'", "ORDER BY id DESC");

?>


<!-- Fim do bloco -->

<div class="container">
  <div class="row">
    <br>
    <br>
    <br>
    <div class="col-md-12">
      <div align="center" class="panel panel-default">
        <strong>RELATÓRIO DE FATURAMENTO - PREVEN EXAMES COMPLEMENTARES
      </div></strong>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">

          Convênio: <strong><?php echo $convenio ?></strong><br>
          Mês e ano de referência: <strong><?php echo $mes ?> / <?php echo $ano ?></strong>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
          <?php
          $where = "WHERE dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'";
          $geral = select('atendimento', '*', $where, 'ORDER BY id');
          $count = ($geral !== false) ? count($geral) : 0;
          ?>
          Total de colaboradores encaminhados: <strong><?php print $count; ?></strong>
        </div>
      </div>

    </div>


    <div class="col-md-3">
      <div class="panel panel-default">

        Exames Clínicos:
        <?php
        $where = "WHERE ex_clinico != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'";
        $clinico = select('atendimento', '*', $where, 'ORDER BY id');
        $t_clinico = ($clinico !== false) ? count($clinico) : 0;
        ?>
        <strong><?php print $t_clinico; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Teste de Romberg:
        <?php
        $where = "WHERE romberg != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'";
        $romberg = select('atendimento', '*', $where, 'ORDER BY id');
        $t_romberg = ($romberg !== false) ? count($romberg) : 0;

        ?>
        <strong><?php print $t_romberg; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Raio-x Tórax:
        <?php
        $where = "WHERE rx_torax != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'";
        $rx_torax = select('atendimento', '*', $where, 'ORDER BY id');
        $t_rx_torax = ($rx_torax !== false) ? count($rx_torax) : 0;

        ?>
        <strong><?php print $t_rx_torax; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Raio-x Tórax OIT:
        <?php
        $where = "WHERE rx_torax_oit != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'";
        $torax_oit = select('atendimento', '*', $where, 'ORDER BY id');
        $t_oit = ($torax_oit !== false) ? count($torax_oit) : 0;
        ?>
        <strong><?php print $t_oit; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Raio-x Col Cervical:
        <?php
        $cervical = select('atendimento', '*', "WHERE rx_cervical != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_cervical = ($cervical !== false) ? count($cervical) : 0;
        ?>
        <strong><?php print $t_cervical; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Raio-x Col Lombar:
        <?php
        $lombar = select('atendimento', '*', "WHERE rx_lombar != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_lombar = ($lombar !== false) ? count($lombar) : 0;
        ?>
        <strong><?php print $t_lombar; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Raio-x L. Sacra:
        <?php
        $sacra = select('atendimento', '*', "WHERE rx_lombo_sacra != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_sacra = ($sacra !== false) ? count($sacra) : 0;
        ?>
        <strong><?php print $t_sacra; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Espirometria:
        <?php
        $espiro = select('atendimento', '*', "WHERE espirometria != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_espiro = ($espiro !== false) ? count($espiro) : 0;
        ?>
        <strong><?php print $t_espiro; ?></strong>

      </div>
    </div>


    <div class="col-md-3">
      <div class="panel panel-default">

        Audiometria:
        <?php
        $audio = select('atendimento', '*', "WHERE audiometria != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_audio = ($audio !== false) ? count($audio) : 0;
        ?>
        <strong><?php print $t_audio; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Acuidade Visual:
        <?php
        $acuidade = select('atendimento', '*', "WHERE acuidade != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_acuidade = ($acuidade !== false) ? count($acuidade) : 0;
        ?>
        <strong><?php print $t_acuidade; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Av. Psicossocial:
        <?php
        $psico = select('atendimento', '*', "WHERE psicossocial != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_psico = ($psico !== false) ? count($psico) : 0;
        ?>
        <strong><?php print $t_psico; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Eletrocardiograma:
        <?php
        $ecg = select('atendimento', '*', "WHERE ecg != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_ecg = ($ecg !== false) ? count($ecg) : 0;
        ?>
        <strong><?php print $t_ecg; ?></strong>

      </div>
    </div>

    <div class="col-md-3">
      <div class="panel panel-default">

        Eletroencefalograma:
        <?php
        $eeg = select('atendimento', '*', "WHERE eeg != '' AND dia LIKE '%{$dia}%' AND mes LIKE '%{$mes}%' AND ano LIKE '%{$ano}%' AND convenio LIKE '%{$convenio}%' AND empresa LIKE '%{$empresa}%'", 'ORDER BY id');
        $t_eeg = ($eeg !== false) ? count($eeg) : 0;
        ?>
        <strong><?php print $t_eeg; ?></strong>

      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">

        Relatório de Exames Laboratoriais em anexo



      </div>

    </div>


    <br>
    <br>
    <div class="col-md-12">
      <input type="text" name="empresa" class="form-control" required="required">
    </div>



  </div>
</div>


</body>
<?php include("../footer.php"); ?>

</html>
<?php
 

// Verifica se a variável de sessão 'login' está definida, senão atribui uma string vazia
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
// Verifica se a variável GET 'id' está definida e não está vazia, senão atribui uma string vazia
$id = isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : '';
// Cria um array com os valores a serem atualizados
$valores = array(
    'liberador' => $login,
    'hr_saida' => date('H:i:s')
);
// Chama a função para atualizar o registro na tabela 'atendimento'
update('atendimento', $valores, "id = '$id'");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Copreven | CONFIRMAÇÃO DE ATENDIMENTO =)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        window.setTimeout("window.close();", 3 * 1000);
    </script>
</head>
<body>
    <!-- Início do Menu inicial / Barra superior -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <center>
                    <a class="navbar-brand" href="">
                        <img class="" src="../assets/images/logo1.png" height="35px" width="">
                    </a>
                </center>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <center>
        <h3>Atendimento <strong>LIBERADO</strong> com sucesso !!</h3>
        <br><br>
        <h1>:)</h1>
    </center>
</body>
</html>

<?php include('../footer.php') ?>

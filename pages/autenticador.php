<?

// as variáveis login e senha recebem os dados digitados na página anterior
$email 		= $_REQUEST['login'];
$pass 		= $_REQUEST['password'];

include("../includes/autoload.php");
include("../header.php");


$conexao 	= select("acesso","*","WHERE email LIKE '$email' AND senha LIKE '$pass'");
$contador   = $pdo->query("SELECT * FROM acesso WHERE email LIKE '$email'")->fetchAll();
$t_cont     = count($contador);

//Caso consiga logar cria a sessão
if ($t_cont > 0) {
    // session_start inicia a sessão
    session_start();
    $_SESSION['login'] = $email;
    $_SESSION['senha'] = $pass;

    if($conexao == true){
    for ($i=0;$i<count($conexao);$i++){

    if ($conexao[$i]['status']=='adm') {
        header('location:../app/index.php');
    } 

    elseif ($conexao[$i]['status']=='rcp') {
        header('location:../app/recepcao.php');
    }

    elseif ($conexao[$i]['status']=='sla') {
        header('location:../app/salas_sla.php');
    }

    else {
     
    //Redireciona para a página de autenticação
    header('location:..sistema/index.php?erro=login ou senha inválidos.');
    echo "senha incorreta";
    }
            
	}
}
}
 
//Caso contrário redireciona para a página de autenticação
else {
     
    //Redireciona para a página de autenticação
    header('location:../index.php?erro=login ou senha inválidos.');
    echo "senha incorreta";
    }
?>
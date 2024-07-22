<?php
("includes/autoload.php");
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
        </span>
    </div>
</nav>

<div class="container text-center">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-4 border mt-5 pb-5">
            <div class="panel panel-default" style="margin-top: 50px;">
                <div class="panel-heading text-center">
                    <img src="http://copreven.com.br/sistema/app/images/logo1.png" alt="Logo" style="width: 300px; margin-bottom: 10px;">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <form id="loginForm">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" id="password" required>
                            </div>
                            <button class="btn btn-lg btn-success btn-block" onclick="login()" type="button">Login</button>
                        </fieldset>
                    </form>
                    <div id="loginError" class="alert alert-danger" style="display: none;">
                        Usuario ou senha inválido.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function login() {
            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                type: 'POST',
                url: 'functions/validate_login.php',
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    if (typeof response === 'string') {
                        response = JSON.parse(response);
                    }                 
                    if (response.success) {
                        window.location.href = 'index.php';
                    } else {
                        $('#loginError').show();
                    }
                },
                error: function() {
                    alert('Erro Interno Tente novamente mais tarde');
                }
            });
        };
    </script>

    <?php include('footer.php'); ?>
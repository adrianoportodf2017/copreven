<?php
session_start();
include('header.php');
?>

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
                    if (response.success) {
                        window.location.href = 'home.php';
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
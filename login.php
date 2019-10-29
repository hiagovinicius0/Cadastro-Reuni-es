<?php
session_start();
if(isset($_COOKIE['reuniao']['IdUsuario'])) {
    echo '<script type="text/javascript">window.location = "index.php";</script>';
}
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reuniões Login</title>

    <!-- Custom fonts for this template-->
    <link href="./login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="./login/css/sb-admin.min.css" rel="stylesheet" />

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="post" asp-action="Login">
                <div class="form-group">
                    <div class="form-label-group">
                        <input id="Usuario" class="form-control" placeholder="E-mail" required="required" autofocus="autofocus">
                        <label for="Usuario">Usuário</label>
                    </div>
                </div>
                <div class="form-group">
                    <input id="Senha" class="form-control" type="password" placeholder="Senha" required="required" autofocus="autofocus">
                    <label for="Senha"></label>
                </div>
                <div id="erro"></div>
                <button type="button" class="btn btn-primary" onclick="Login()">Entrar</button>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="./login/vendor/jquery/jquery.min.js"></script>
<script src="./login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/index.js"></script>


</body>

</html>

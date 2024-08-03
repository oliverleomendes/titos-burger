<?php include_once("configs/global.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= TITULO ?></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="assets/css/adminStyle.css">
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>

                <form action="#" method="post" class="form-login">
                    <div class="py-2">
                        <input type="text" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="py-2">
                        <input type="password" class="form-control" placeholder="Senha">
                    </div>
                    <div class="text-center">
                        <a href="dashboard.php" class="btn btn-titos">Entrar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
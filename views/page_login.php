<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['cod']) && $_GET['cod'] == 1) { ?>
                            <div class="alert alert-danger mt-3">
                                <p>Erro ao validar login!</p>
                            </div>
                        <?php } ?>
                        <form id="loginForm" action="../controllers/login_controller.php" method="post">
                            <div class="form-group">
                                <label for="username">Usuário</label>
                                <input type="text" class="form-control" id="username" name="name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" name="pwd" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
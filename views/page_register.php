<?php require_once("controllers/session.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <style type="text/css">
        body {
            margin: 20px;
            background-color: #ffffff;
            font-family: 'Open Sans', sans-serif;
        }

        h2 {
            font-family: 'Open Sans', sans-serif;
        }

        thead {
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="py-5 text-center">Novo Usuário <i class="bi bi-person-plus-fill"></i></h2>

        <form action="./../controllers/insert_client.php" method="POST">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nome <i class="bi bi-person"></i> </label>
                    <input type="text" class="form-control" name="name" required autofocus>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i> </label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-md-4">
                    <label for="cpf" class="form-label">CPF <i class="bi bi-credit-card-2-front"></i></label>
                    <input type="text" class="form-control cpf-mask" name="cpf" required>
                </div>
                <div class="col-md-4">
                    <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"></i> </label>
                    <input type="date" class="form-control" name="birth" required>
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label">Telefone <i class="bi bi-whatsapp"></i> </label>
                    <input type="text" class="form-control phone-mask" name="phone" required>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Endereço <i class="bi bi-map"></i> </label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <hr class="my-4">
                <div class="col-md-12 text-end">
                    <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                    <a class="btn btn-success btn-lg" href="../index.php"> Cancelar </a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.cpf-mask').mask('000.000.000-00', { reverse: true });
            $('.phone-mask').mask('(00) 00000-0000');
        });
    </script>
</body>

</html>

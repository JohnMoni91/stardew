<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardew FAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/15dd37e143312d1200d8b3f7ae6f0b31.png"/>
</head>
<body>

<?php include "cabecario.php"; ?>

<audio id="musica">
    <source src="assets/stardewost1" type="audio/mp3">
</audio>

<div class="container">
    <div class="card-login">
        <div class="card">
            <div class="card-header">
                <h6 id="bem">Seja bem-vindo!</h6>
            </div>
            <div class="card-body">
                <form action="valida_login.php" method="post">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input name="senha" type="password" class="form-control" placeholder="Senha">
                    </div>
                    <?php if (isset($_GET['login'])): ?>
                        <div class="text-danger">
                            <?php
                            echo $_GET['login'] == 'erro' ? 'Usuário ou senha inválido(s).' : 'Faça login para acessar essa página!';
                            ?>
                        </div>
                    <?php endif; ?>
                    <button id="bottom" class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                    <br>
                    <a id="clientes" href="crieconta.php">Crie uma conta!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardew FAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/15dd37e143312d1200d8b3f7ae6f0b31.png"/>
</head>
<body>

<?php include 'cabecario.php'; ?>

<br>

<div class="card-login">
    <div class="card">
        <div class="card-header">
            Crie uma conta!
        </div>
        <div class="card-body">
            <form action="criandoconta.php" method="post">
                <div class="form-group">
                    <input name="nome" type="text" class="form-control" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <input name="confirmar_senha" type="password" class="form-control" placeholder="Confirmar senha" required>
                </div>
                <?php if (isset($_GET['erro'])): ?>
                    <div class="text-danger">
                        <?php
                        echo $_GET['erro'] == 'senha' ? 'As senhas não coincidem.' : 'Esse email já está cadastrado.';
                        ?>
                    </div>
                <?php endif; ?>
                <button id="bottom2" class="btn btn-lg btn-info btn-block" type="submit">Criar!</button>
            </form>
            <br>
                <a href="index.php" id="login">Já possui uma conta?</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php
    session_start();

    include("global.php");

    $login = $_POST['nome'];
    $senha = $_POST['senha'];

    $query = mysqli_query($conn, "SELECT * FROM `clientes` WHERE cli_nome = '$login' AND cli_senha = '$senha'");

    if (isset($_POST['login'])) {
        if (empty($_POST['nome'])) {
            echo "Informe o seu nome";
        }

        if (empty($_POST['senha'])) {
            echo "Informe sua senha";
        }

        if(mysqli_num_rows ($query)) {
          $login = $_SESSION['nome'];
          $login = $_SESSION['senha'];
          header('location:index.php');
        } else {
          unset ($_SESSION['nome']);
          unset ($_SESSION['senha']);
          header('location:login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <form action="" method="post">
        <label for="login">Login</label>
        <input type="text" placeholder="Informe seu login" name="nome">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="">

        <button type="submit" name="login">Entrar</button>
    </form>
</body>
</html>
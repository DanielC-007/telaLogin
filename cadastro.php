<?php
    include_once('connect.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $result = mysqli_query($conexao, "INSERT INTO users(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <main class="container">
        <form action="cadastro.php" method="POST">
            <h1>Cadastro</h1>
            <br>
            <input type="text" placeholder="Nome" name="nome" id="nome" required>
            <br>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <br>
            <input type="password" placeholder="Senha" name="senha" id="senha" required>
            <br>
            <input type="submit" name="submit" id="submit">
        </form>
    </main>
</body>
</html>
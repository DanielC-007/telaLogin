<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main class="container">
        <form action="testeLogin.php" method="POST">
            <h1>Login</h1>
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
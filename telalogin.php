<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrioLog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 id="titulo">Friolog</h1>
        <hr>
    </header>
    <main>
    <div class="card">
    <h1 id="subtitulo">Login</h1>
        <form action="#" method="POST">
            <label for="nome" id="login">Nome de Usuário:</label><br>
            <input type="text" name="nome" id="nome" placeholder="nome" required>
            <br><br>
            <label for="email" id="login">Email:</label><br>
            <input type="email" name="email" id="email" placeholder="exemplo@email.com" required >
            <br><br>
            <label for="senha" id="login">Senha:</label><br>
            <input type="password" name="senha" id="senha" placeholder="********" required>
            <br><br>
            <button>Entrar</button>
        </form>
</div>
</main>
</body>
</html>
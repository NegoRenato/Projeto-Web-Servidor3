<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Document</title>
</head>
<body>
    <main>
        <button class="botao"><a href="/">voltar para pagina inicial</a></button>
        <h2>Login Aluno</h2>
        <form id="login" action="{{ route('login') }}" method="post">
            @csrf
            <label for="usuario">Usuario: <input class="caixa-texto" type="text" name="name"></label>
            <label for="senha">Senha: <input class="caixa-texto" type="password" name="password"></label>
            <button class="botao" >LOGAR</button>
        </form>
    </main>
</body>
</html>
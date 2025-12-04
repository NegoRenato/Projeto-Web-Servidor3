<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/meu-estilo.css') }}">
    <title>Login</title>
</head>
<body>

    <div class="auth-container">
        <a href="/" class="btn btn-voltar">← Voltar</a>

        <div class="auth-card">
            <h2>Login Aluno</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <small>Usuário ou senha incorretos.</small>
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                <label>Usuário</label>
                <input type="text" name="username" required>

                <label>Senha</label>
                <input type="password" name="password" required>

                <button type="submit" class="btn" style="width: 100%; margin-top: 10px;">ENTRAR</button>
            </form>
        </div>
    </div>

</body>
</html>
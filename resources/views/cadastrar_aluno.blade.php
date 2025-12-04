<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/meu-estilo.css') }}">
    <title>Cadastro</title>
</head>
<body>
    
    <div class="auth-container">
        <a href="/" class="btn btn-voltar">← Voltar</a>

        <div class="auth-card">
            <h2>Cadastro de Aluno</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('register') }}" method="post">
                @csrf
                
                <label>Nome Completo</label>
                <input type="text" name="name" required>

                <label>Data de Nascimento</label>
                <input type="date" name="data_nascimento" required>

                <label>Email</label>
                <input type="email" name="email" required>

                <label>Nome de Usuário (Login)</label>
                <input type="text" name="username" required>

                <label>Senha</label>
                <input type="password" name="password" required>

                <label>Confirmar Senha</label>
                <input type="password" name="password_confirmation" required>

                <div class="radio-group">
                    <span>Sexo:</span>
                    <label><input type="radio" name="sexo" value="Masculino" checked> Masculino</label>
                    <label><input type="radio" name="sexo" value="Feminino"> Feminino</label>
                </div>

                <button type="submit" class="btn" style="width: 100%;">CADASTRAR</button>
            </form>
        </div>
    </div>

</body>
</html>
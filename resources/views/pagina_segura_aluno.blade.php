<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/meu-estilo.css') }}">
    <title>Dashboard</title>
</head>
<body>

    <header class="dashboard-header">
        <h2>Seja bem vindo, {{ Auth::user()->name }}</h2> <nav class="dashboard-menu">
            <ul>
                <li><a href="#">Notas</a></li>
                <li><a href="#">Faltas</a></li>
                <li><a href="#">Calendário</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn" style="padding: 5px 10px; font-size: 0.8rem; background-color: #ef4444;">Sair</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <main style="padding: 20px;">
        <p>Conteúdo exclusivo do aluno...</p>
    </main>

</body>
</html>
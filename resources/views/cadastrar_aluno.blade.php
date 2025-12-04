<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Cadastrar.css">
    <title>Document</title>
</head>
<body>
    <main>
        <button class="botao"><a href="/">voltar para pagina inicial</a></button>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Cadastro Aluno</h2>
        <form id="formulario" action="{{ route('register') }}" method="post">
            @csrf
           <label for="1">Nome:<input class="caixa-texto" type="text" name="name" id="1"><br><br></label>
            <label for="2">Data de Nascimento: <input type="date" name="dataNascimento" id="2"><br><br></label>
            <label for="6">email: <input class="caixa-texto" type="email" name="email" id="6"><br><br></label>
            <label for="3">nome de usuario: <input class="caixa-texto" type="text" name="username" id="3"><br><br></label>
            <label for="4">senha do usuario: <input class="caixa-texto" type="password" name="password" id="4"> <br><br></label>
            <label>Confirmar Senha<input type="password" name="password_confirmation" class="form-control" required></label>
            <label for="5">Sexo:</label>
            <label for="">Masculino <input type="radio" name="sexo" id="5" value="Masculino" checked></label>
            <label for="">Feminino <input type="radio" name="sexo" id="5" value="Feminino"></label>
            <input class="botao" type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>
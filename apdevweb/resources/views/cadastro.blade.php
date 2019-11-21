@extends('layouts.app')

@section('title')
Cadastro
@endsection

@section('style')
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
@endsection

@section('scripts')
    <script src="js/cadastrar.js"></script>
@endsection

@section('content')

    @include('inc.menu')

    <form action="/action_page.php">
        <h1>Cadastre-se</h1>
        <p>
            <label for="nome"></label>
            <input type="text" placeholder="Nome" required>
        </p>
        <p>
            <label for="nome"></label>
            <input type="text" placeholder="Sobrenome" required>
        </p>
            <label for="email"></label>
            <input type="email" placeholder="E-mail" required>
        <p>
            <label for="senha"></label>
            <input type="password" id="senha" name="senha-contato" placeholder="Senha" minlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="no minimo uma letra maiúscula e uma minúscula além de um carácter especial e um numero com 8 ou mais caracteres"> 
        </p>
        <p>
            <label for="senha1"></label>
            <input type="password" id="senha1" name="senha1-contato" placeholder="Confirme a senha" minlength="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="no minimo uma letra maiúscula e uma minúscula além de um carácter especial e um numero com 8 ou mais caracteres">
        </p>
        <p>
            <input class="logar" type="submit" value="Enviar">
        </p>
    </form>

@endsection

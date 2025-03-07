@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/minhas-materias.css">
@endsection

@section('content')
<div class="container">

<nav class="menu">
    <ul>
        <li class="logo"></li>
        <li class="menu"><a href="home.html">Home</a></li>
        <li class="menu"><a href="contato.html">Contato</a></li>
        <li class="menu"><a href="login.html"><strong>Login</strong></a></li>
        <li class="menu"><a href="cadastro.html"><strong>Cadastre-se</strong></a></li>
    </ul>
</nav>

<form class="form" method="POST" action="menu.html">

    <h1>Redefinir senha</h1>
    <p>
        <label for="email_login"></label>
        <input type="email" placeholder="E-mail cadastrado">
    </p>
    <p>
        <input class="logar" type="submit" value="Enviar">
    </p>

    <div>
        <p>
            <a class="fazerLogin" href="login.html">Ou <strong>Fazer login</strong></a>
        </p>
    </div>
</form>



@endsection
@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('content')

    @include('inc.menu')

    <form class="form" method="POST" action="pagina-inicial.html">
        <h1>Login</h1>
        <p>
            <label for="email_login"></label>
            <input type="email" placeholder="Seu e-mail">
        </p>
        <p>
            <label for="senha_login"></label>
            <input type="password" placeholder="Sua senha">
        </p>
        <p class="manterlogado">
            <input type="checkbox" name="manterlogado" id="manterlogado" value="">
            <label for="manterlogado">Manter-me logado.</label>
            <a class="recupearSenha" href="/recuperarSenha"> Esqueceu sua senha?</a>
        </p>
        <p>
            <input class="logar" type="submit" placeholder="Acessar">
        </p>

        <div>
            <p>
                <a class="semConta" href="/cadastro">Ainda não tem acesso?<strong> Cadastre-se</strong></a>
            </p>
        </div>
    </form>

@endsection

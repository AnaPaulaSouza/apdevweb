@extends('layouts.app')

@section('title')
Contato
@endsection

@section('style')
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

    @include('inc.menu')

    <form class="form" method="POST" action="menu.html">

        <h1>Fale conosco</h1>
        <p>
            <label for="nome"></label>
            <input type="text" placeholder="Nome" required>
        </p>
        <p>
            <label for="telefone"></label>
            <input type="tel" placeholder="Telefone">
        </p>
            <label for="email"></label>
            <input type="email" placeholder="E-mail" required>
        <p>
            <label for="assunto"></label>
            <textarea class="mensagem" name="assunto" placeholder="Mensagem" required></textarea>
            
        </p>
        <p>
            <input class="logar" type="submit" value="Enviar">
        </p>
    </form>

@endsection
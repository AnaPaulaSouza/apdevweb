@extends('layouts.app')

@section('content')

    @include('inc.header')

    <main>
        <section class="secao-inicio">
            <p class="bemVindo"><span class="bemVindo-inicio">Seja Bem-Vindo ao </span><strong>Up Study</strong></p>
            <a class="botao-index" href="login">Clique aqui para logar</a>
            <p class="ou">Ou</p>
            <a class="botao-index" href="cadastro">Clique aqui para se cadastrar</a>
        </section>
    </main>
@endsection

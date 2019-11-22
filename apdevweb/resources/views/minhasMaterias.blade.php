@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/minhas-materias.css">
@endsection

@section('content')

    <div class="holder">
        <div class="imagem">
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Cálculo I</a>
        </div>
        <div class="imagem">    
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Química</a>
        </div>
        <div class="imagem">
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Física</a>
        </div>
        <div class="imagem">
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Redes</a>
        </div>
        <div class="imagem">
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Web</a>
        </div>
        <div class="imagem">
            <a href="/minhasMaterias"><img class="foto-past" src="img/pastinha2.png">Sinais e Sistemas</a>
        </div>
    </div>
            
    <main>
        <section class="secao-inicio">
            <ul style="list-style-type: none;" class="icones-redes-sociais">
        </section>
    </main>
@endsection
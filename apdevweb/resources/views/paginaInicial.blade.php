@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/pagina-inicial.css">
@endsection

@section('content')

    @include('inc.header')

    <div class="holder">
        <div class="imagem">
            <a href="minhas-materias.html"><img class="materias" src="img/materias.jpg" alt="Materias"></a>
            <a href="minhas-materias.html"><h2 class="legenda-materias">Minhas Materias</h2></a>
        </div>
        <div class="imagem">
            <a href="#"><img class="documentos" src="img/doc2.jpg" alt="Documentos"></a>
            <a href="#"><h2 class="legenda-documentos">Meus Documentos</h2></a>
        </div>
        <div class="imagem">
            <a href="#"><img class="mais" src="img/mais.png" alt="Mais"></a>
            <a href="#"><h2 class="legenda-mais">Criar Novas Materias</h2></a>
        </div>
        <div class="imagem">
            <a href="#"><img class="perg-resp" src="img/perg.jpeg" alt="Perguntas e Respostas"></a>
            <a href="#"><h2 class="legenda-perg-resp">Perguntas e Respostas</h2></a>
        </div>
    </div>
             <!--COLOCAR NA TELA DE MINHAS MATERIAS<a class="botao-index" href="compartilhe.html">Compartilhe</a>-->
    <main>
            <section class="secao-inicio">
                <ul style="list-style-type: none;" class="icones-redes-sociais">
            </section>
    </main>


@endsection
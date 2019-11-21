@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

    @include('inc.menu')

    <h1>@lang('messages.messageSentSuccessfully')</h1>

    <a class="botao-index" href="/">@lang('messages.clickToReturn')</a>

@endsection
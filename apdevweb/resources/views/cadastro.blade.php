@extends('layouts.app')

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

    <h1>Cadastre-se</h1>

    {{ Form::open(array('route' => 'register', 'class' => 'form')) }}

        <p>
            {{ Form::text('name', '', array('placeholder' => __('messages.name'))) }}
        </p>

        <p>
            {{ Form::email('email', '', array('placeholder' => __('messages.email'))) }}
        </p>

        <p>
            {{ Form::password('password', array('placeholder' => __('messages.password'))) }}
        </p>

        <p>
            {{ Form::password('password_confirmation', array('placeholder' => __('messages.confirmPassword'))) }}
        </p>

        <p>
            {{ Form::submit(__('messages.send')) }}
        </p>

    {{ Form::close() }}

@endsection

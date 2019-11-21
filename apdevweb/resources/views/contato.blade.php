@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('content')

    @include('inc.menu')

    <h1>@lang('messages.contactUs')</h1>

    {{ Form::open(array('route' => 'messages.store', 'class' => 'form')) }}
        <p>
            {{ Form::text('name', '', array('placeholder' => __('messages.name'))) }}
        </p>

        <p>
            {{ Form::text('phone', '', array('placeholder' => __('messages.phone'))) }}
        </p>

        <p>
            {{ Form::email('email', '', array('placeholder' => __('messages.email'))) }}
        </p>

        <p>
            {{ Form::textarea('message', '', array('placeholder' => __('messages.message'))) }}
        </p>

        <p>
            {{ Form::submit(__('messages.send')) }}
        </p>
    {{ Form::close() }}

@endsection
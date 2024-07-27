<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/saude.css') }}">
@endpush

@section('content')
<div class="main">
<div class="conteudo">
    <div class="page-top">
        <div class="page-top-titulo">
            <h1>SAÚDE<span class="sub-titulo-page">/ATV.FÍSICA</span></h1>
        </div>
        <div class="page-top-progress">
            <div class="progress" style="height: 10px; width:80%">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="page-down">
        <div class="page-down-left">
            <div class="dias-semana">
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
                <div class="dia-semana"></div>
            </div>
        </div>
        <div class="page-down-right">

        </div>
    </div>
</div>
<div class="side-bar-right">

</div>
</div>

@endsection

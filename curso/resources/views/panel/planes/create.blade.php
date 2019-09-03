@extends('panel.layouts.app')
@section('title')
 Cadastrar Aviões
@endsection
@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home></a> 
    <a href="{{route('brands.index')}}" class="bred">Aviões></a>
    <a href="#" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Avião</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')
        {!! Form::open(['route' => 'planes.store', 'class' => 'form form-search form-ds']) !!} 
            @include('panel.planes.form')
        {!! Form::close() !!}   

</div><!--Content Dinâmico-->


@endsection
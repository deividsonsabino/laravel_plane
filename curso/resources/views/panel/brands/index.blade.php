@extends('panel.layouts.app')
@section('title')
 Marcas de Aviões 
@endsection
@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home></a> 
    <a href="{{route('brands.index')}}" class="bred">brands</a>
</div>

<a class="btn btn-success" href="{{route('brands.create')}}">
    <i class="fa fa-plus-circle" aria-hidden="true"></i>Cadastrar
</a>

<div class="title-pg">
    <h1 class="title-pg">Marcas de Aviões </h1>
</div>



@endsection
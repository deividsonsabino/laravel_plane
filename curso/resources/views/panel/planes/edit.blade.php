@extends('panel.layouts.app')
@section('title')
 {{$plane->id}}
@endsection
@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home></a> 
    <a href="{{route('brands.index')}}" class="bred">Aviões></a>
    <a href="#" class="bred">{{$plane->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Avião:  {{$plane->id}}</h1>
</div>

<div class="content-din">

    @include('panel.includes.errors')
        {!! Form::model($plane,(['route' => ['planes.update', $plane->id], 'class' => 'form form-search form-ds', 'method' => 'PUT'])) !!}
            @include('panel.planes.form')
        {!! Form::close() !!}   

</div><!--Content Dinâmico-->


@endsection
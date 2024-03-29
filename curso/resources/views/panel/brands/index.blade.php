@extends('panel.layouts.app')
@section('title')
 Marcas de Aviões 
@endsection
@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home></a> 
    <a href="{{route('brands.index')}}" class="bred">Marcas</a>
</div>


<div class="title-pg">
    <h1 class="title-pg">Marcas de Aviões </h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        {!! Form::open(['route' => 'brands.search','class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'O que deseja Encontrar?']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close() !!}

        @if (isset($dataForm['key_search']))
            <div class="alert alert-info">
                <a href=""><i class="fa fa-refresh"></i></a>
                <p>Resultados para: <strong>{{$dataForm['key_search']}}</strong></p>
            </div>
        @endif

    </div>
    
    <div class="messages">
        @include('panel.includes.alerts')
    </div>

    <div class="class-btn-insert">
        <a href="{{route('brands.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th width="150">Ações</th>
        </tr>

        @forelse ($brands as $brand)
        <tr>
            <td>{{$brand->name}}</td>
            <td>
                <a href="{{route('brands.edit',$brand->id)}}" class="edit">Edit</a>
                <a href="{{route('brands.show',$brand->id)}}" class="delete">View</a>
            </td>
        </tr>
        @empty
        <tr>
            <td>Nenhum item encontrado</td>
        </tr>
        @endforelse


    </table>

    @if (isset($dataForm))
        {!! $brands->appends($dataForm)->links() !!}
    @else 
        {!! $brands->links() !!}
    @endif
       

</div><!--Content Dinâmico-->

@endsection
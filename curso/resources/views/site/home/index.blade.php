@extends('site.layouts.app')
@section('title')
    Home Page
@endsection

@section('content-site')
<section class="slide"></section><!--Slide-->

        <div class="actions-form">
            <h2>Encontre: </h2>

            <form action="" class="form-home text-center">
                <div class="form-group">
                    <input type="text" name="cities_origin" list="cities_origin" class="form-control" placeholder="Cidade Origem">
                    <datalist id="cities_origin">
                        <option value="Cidade 1/GO">
                        <option value="Cidade 2/GO">
                        <option value="Cidade 3/GO">
                        <option value="Cidade 4/GO">
                        <option value="Cidade 5/GO">
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="text" name="cities_destination" list="cities_destination" class="form-control" placeholder="Cidade Destino">
                    <datalist id="cities_destination">
                        <option value="Outra Cidade 1/GO">
                        <option value="Outra Cidade 2/GO">
                        <option value="Outra Cidade 3/GO">
                        <option value="Outra Cidade 4/GO">
                        <option value="Outra Cidade 5/GO">
                    </datalist>
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control" placeholder="Data">
                </div>
                <!--
                <button class="btn" type="submit">
                    Procurar <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                -->
                <a href="index.php?pg=resultados-pesquisa">
                    <button class="btn" type="button">
                        Procurar <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </a>
            </form>
        </div><!--actions-form-->

        <div class="rectangle"></div><!--rectangle-->

        <div class="clear"></div>

        <section class="banner">
            <div class="container banner-ctc-background-over-white card">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img class="banner-ctc-img" src="{{url('assets/site/images/cards.png')}}">
                    </div>
                    <div class="col-md-7">
                        
                        <div class="banner-ctc-titulo-contenedor"><span>Que tal assinar na EspecializaTi Academy?</span></div>
                        
                        <div>
                            <p>ASSINE E TENHA ACESSO A TODOS OS NOSOS CURSOS DISPONÍVEL NA ESPECIALIZATI ACADEMY. MAIS BARATO QUE UM CAFÉ POR DIA!</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="https://academy.especializati.com.br" target="_blank" class="btn pull-right btn-flat flat-medium third-level">
                            <span>Saiba Mais</span>
                        </a>
                    </div>
                </div>
            </div>
        </section><!--Banner--> 
@endsection
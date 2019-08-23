<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!--Style-->
        <link href="{{url('assets/site/css/style.css')}}" rel="stylesheet">

        <!--Responsive-->
        <link rel="stylesheet" href="{{url('assets/site/css/responsive.css')}}">

        <!--Resets-->
        <link href="{{url('assets/site/css/reset.css')}}" rel="stylesheet">

        <!--Fonts Google-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!--Icons-->
        <script href="https://kit.fontawesome.com/6f6c1736a5.js"></script>

        <!--Favicon-->
        <link rel="icon" href="{{url('assets/site/images/favicon.png')}}" type="image/png">
    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light menu">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="?pg=home">
                    <img src="{{url('assets/site/images/logo.png')}}" alt="" class="img-menu">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('promotions')}}">Promoções</a>
                        </li>
                    </ul>
                </div><!--collapse-->
                @if(false)
                    <div class="main-auth">
                        <a href="#" class="sign">ENTRAR</a>
                        <a href="#" class="signup efect-transition">CADASTRE-SE</a>
                    </div>
                @else
                    <div class="main-user-auth">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle user-auth" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{url('assets/site/images/no-image.png')}}" alt="" class="img-header-user">
                                Nome Usuário
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="?pg=meu-perfil">Meu Perfil</a>
                                <a class="dropdown-item" href="?pg=compras">Minhas Compras</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">Sair</a>
                            </div>
                        </div>
                    </div><!-- main-user-auth -->
                @endif 
            </div><!--Container-->
        </nav><!--Menu-->

        @yield('content-site')

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Conheça-nos</h2>

                        <ul class="list-footer">
                            <li><a href="#">Trabalhe conosco</a></li>
                            <li><a href="#">Experiência a bordo</a></li>
                            <li><a href="#">Salas VIP</a></li>
                            <li><a href="#">Passaredo</a></li>
                            <li><a href="#">oneworld</a></li>
                            <li><a href="#">Nossa frota</a></li>
                            <li><a href="#">Perguntas frequentes</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Transparência</h2>

                        <ul class="list-footer">
                            <li><a href="#">Trabalhe conosco</a></li>
                            <li><a href="#">Experiência a bordo</a></li>
                            <li><a href="#">Salas VIP</a></li>
                            <li><a href="#">Passaredo</a></li>
                            <li><a href="#">oneworld</a></li>
                            <li><a href="#">Nossa frota</a></li>
                            <li><a href="#">Perguntas frequentes</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Sala de imprensa</h2>

                        <ul class="list-footer">
                            <li><a href="#">Trabalhe conosco</a></li>
                            <li><a href="#">Experiência a bordo</a></li>
                            <li><a href="#">Salas VIP</a></li>
                            <li><a href="#">Passaredo</a></li>
                            <li><a href="#">oneworld</a></li>
                            <li><a href="#">Nossa frota</a></li>
                            <li><a href="#">Perguntas frequentes</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Sustentabilidade</h2>

                        <ul class="list-footer">
                            <li><a href="#">Trabalhe conosco</a></li>
                            <li><a href="#">Experiência a bordo</a></li>
                            <li><a href="#">Salas VIP</a></li>
                            <li><a href="#">Passaredo</a></li>
                            <li><a href="#">oneworld</a></li>
                            <li><a href="#">Nossa frota</a></li>
                            <li><a href="#">Perguntas frequentes</a></li>
                        </ul>
                    </div>

                </div><!--row-->    
            </div><!--Container-->
        </footer><!--Footer-->

        <div class="footer-copy">
            <div class="container">
                <p>© EspecializaTi</p>
            </div>
        </div><!--Footer Copy-->



        <!--JS-->

        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--Bootstrap-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>
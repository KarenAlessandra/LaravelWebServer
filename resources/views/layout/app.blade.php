
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- page's name -->
    <title>Cake Shop</title>

    <!-- favicon icon -->
    <link rel="icon" href="{{ url('public/images') }}">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

    <!-- coisas -->

    <div class="container0">
        <div class="row">
        <div class="d-flex flex-row-reverse">
        &nbsp;&nbsp;
        <li class="nav-item dropdown">

        <!-- if user is not logged in -->
        @if(auth()->guest())
        <a href="./login" class="btn_icon"><i class="fa fa-user"></i></a>
        @endif

        <!-- if user client is logged in -->
        @if(auth()->check() && auth()->user()->is_client)
        <a class="nav-item dropdown" data-bs-toggle="dropdown"><i class="fa fa-user"></i></a>
        <ul class="dropdown-menu text-center" style="background-color: #7e9680; border: none">

        <!-- corrected condition for user-specific options -->
        <li><a class="dropdown-item" href="./meusPedidos">Meus Pedidos <i
        class="fa fa-birthday-cake"></i></a></li>

        <li><a class="dropdown-item" href="./perfil">Configurações <i class="fa fa-gear"></i></a>
        </li>
        <li><a class="dropdown-item" href="./functions/logout">Deslogar <i
        class="fa fa-sign-out"></i></a></li>
        </ul>
        @endif

        <!-- if user admin is logged in -->
        @if(auth()->check() && auth()->user()->is_admin)
        <a class="nav-item dropdown" data-bs-toggle="dropdown"><i class="fa fa-user"></i></a>
        <ul class="dropdown-menu text-center" style="background-color: #7e9680; border: none">
        <li><a class="dropdown-item" href="./cadastroBolo">Add Bolo <i
        class="fa fa-birthday-cake"></i></a></li>
        <li><a class="dropdown-item" href="./perfil">Configurações <i class="fa fa-gear"></i></a>
        <li><a class="dropdown-item" href="./perfil">Configurações <i class="fa fa-gear"></i></a>
        </li>
        <li><a class="dropdown-item" href="./functions/logout">Deslogar <i
        class="fa fa-sign-out"></i></a></li>
        </ul>
        @endif


        </li>

        &nbsp;&nbsp;

        <!-- carrinho offcanvas -->
        <a href="#offcanvas" class="btn_icon"><i class="fa fa-shopping-cart" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasCart" aria-controls="offcanvasCart"></i></a>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasCart" data-bs-keyboard="false"
        data-bs-backdrop="false" aria-labelledby="offcanvasCartLabel">

        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">Carrinho</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
        <div id="sidebar" class="border rounded">
        <div class="nav flex-column py-3">

        <a href="#menu1" class="nav-link collapsed" data-bs-toggle="collapse" role="button">Bolo
        1</a>
        <div class="collapse ps-2" id="menu1" data-bs-parent="#sidebar">
        <row>
        &nbsp;
        <a href="#more" class="nav-link-cart" data-bs-toggle="collapse"
        aria-expanded="false"><i class="fa fa-plus" style="color: white"></i></a>
        &nbsp;
        <a href="#less" class="nav-link-cart" data-bs-toggle="collapse"
        aria-expanded="false"><i class="fa fa-minus !important"
        style="color: white"></i></a>
        &nbsp;
        <a href="#delete" class="nav-link-cart" data-bs-toggle="collapse"
        aria-expanded="false"><i class="fa fa-trash" style="color: white"></i></a>
        </row>
        </div>
        </div>
        </div>
        <br /><br />
        <a href="./checkout" class="btn btn-success btn-block"
        style="background-color: #2D3C33; border: #7e9680; color: #f3dbcf !important">Finalizar
        Pedido</a>
        </div>
        </div>
        <!-- fim carrinho -->
        </div>


        </div>
        </div>

        <div class="containerPage">
        <div class="container1">
        <div class="row row-cols-5 text-center">
        <a href="./" class="btn_header">Home</a>
        <a href="./products" class="btn_header">Produtos</a>
        
        <a href="./"><img src="{{ asset('./images/logo.png') }}"></img></a>

        <a href="./about_us" class="btn_header">Quem Somos</a>
        <a href="./contact_us" class="btn_header">Contato</a>
        </div>
        </div>
        </div>

    <div class="containerPage">
    <hr>
    </div>
</head>

<body>
<main>
    <div class="containerPage">

        <div class="cardGenerico text-center">
            <div class="row">
                @yield('titulo')
                <!-- <h1 class="h1_title" style="color: #f3dbcf; padding-bottom: 2rem;">Cadastro</h1> -->
            </div>
        </div>

    @yield('content')

    <br /><br /><br />

    <foot>
        <div class="jumbotron2 jumbotron-fluid">
            <img src="{{ asset('./images/logo1.png') }}"></img>
        </div>
    </foot>


</main>
</div>
</div>
</body>

</html>
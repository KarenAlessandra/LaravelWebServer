@extends('layout.app')



@section('content')


<body>
    <main>
        <br /><br />
        <div class="container text-center">
            @yield('titulo', 'Sobre nós')
        </div>
        <br /><br />

        <div class="containerPage"
            style="background-color: rgb(45, 60, 51); margin-left: 10rem; margin-right: 10rem; margin-top: 1rem; border-radius: 1%;">
            <div class="row">
                <div class=" col">
                    <br><br>
                    <img src="/public/images/6.jpg" style="height: 24rem">
                </div>
                <div class="col text-align" style="font-size: 20px; color: #f3dbcf;">
                    <br><br /><br />
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi temporet ♡♡♡
                </div>
            </div>
            <br /><br />
            <div class="row">
                <div class="col text-center" style="font-size: 20px; color: #f3dbcf;">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et
                    dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur
                    sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </div>
            </div>
            <br /><br /><br />
            <div class="col">
                <img src="public/images/5.jpg" style="height: 30rem; margin-bottom: 1rem">
                <br /><br /><br />
            </div>

        </div>
</body>
@endsection
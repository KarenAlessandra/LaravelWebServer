@extends('layout.app')

@section('content')
<body>
    <main>
        <!-- home -->

        <br /><br />
        <div class="container">
            <div class="cardGenerico text-center">

        <div class="container text-center">
            @yield('titulo', 'Cadastro de Usuário')
        </div>

        <br /><br />
                <!-- e-mail, name and text fields -->
                <form class="form-user-register" action="functions/registerUser.php" method="post">
                    <input type="name" class="form-control form-rounded" id="name" name="name"
                        placeholder="Nome Completo">
                    <br /><br />
                    <input type="cpf" class="form-control form-rounded" id="cpf" name="cpf" placeholder="CPF">
                    <br /><br />
                    <input type="email" class="form-control form-rounded" id="email" name="email" placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senha" name="senha"
                        placeholder="Senha">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senhaConfirmada" name="senhaConfirmada"
                        placeholder="Confirme Senha">
                    <br /><br />

                    <button type="submit" class="btn_send" class="submit">Cadastrar</button>
                </form>

                <br />
                <div>
                    <label style="color: #f3dbcf;">Já possui uma conta? </label>
                    <a href="./login" style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para fazer o login.</label>
                </div>
                <br />

                <div>
                    <label style="color: #f3dbcf;">Conta de Administrador? </label>
                    <a href="./register_admin" style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para se cadastrar.</label>
                </div>

                <br />
@endsection
@extends('layout.app')



@section('content')
<body>
    <main>
        <br /><br />
        <div class="container">
                <br /><br />

        <div class="container text-center">
            @yield('titulo', 'Configurações de Usuário')
        </div>

                <br /><br /><br />
                <form class="contact-form" action="./functions/sendMessage.php" method="post">
                    @csrf
                    <input type="text" class="form-control form-rounded" id="name" name="name"
                        placeholder="Nome Completo">
                    <br />
                    <input type="email" class="form-control form-rounded" id="email" name="email"
                        placeholder="Endereço de E-mail">
                    <br />
                    <input type="text" class="form-control form-rounded" id="subject" name="subject"
                        placeholder="Assunto da Mensagem">
                    <br />
                    <textarea class="form-control form-rounded" id="message" name="message" rows="4"
                        placeholder="Digite sua Mensagem">
                        </textarea>
                    <br /><br />

                    <div class="col text-center">
                        <button type="submit" class="btn_send">Enviar</button>
                    </div>
                </form>
            </div>
        
@endsection
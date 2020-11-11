<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">TCC</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Cozinheira</a>
                            <a class="dropdown-item" href="#">Diarista</a>
                            <a class="dropdown-item" href="#">Encanador</a>
                            <a class="dropdown-item" href="#">Eletricista</a>
                            <a class="dropdown-item" href="#">Jardineiro</a>
                            <a class="dropdown-item" href="#">Lavadeira</a>
                            <a class="dropdown-item" href="#">Passadeira</a>


                        </div>
                    </li>
                </ul>
                
                @auth               
               
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="dropdown01" data-toggle="dropdown" >Olá, {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">MEUS DADOS</a>
                            <a class="dropdown-item" href="#">MEUS ORÇAMENTOS</a>
                            <a class="dropdown-item" href="#">MINHAS HABILIDADES</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">SAIR</a>
                        </div>
                    </li>
                </ul>
                                
                
                
                @endauth

                @guest
                <a href="{{ route('login')}}" class="btn mr-sm-4 bg-light">ENTRAR</a></li>
                <a href="{{ route('register')}}" class="btn mr-sm-4 bg-light">CADASTRE-SE</a></li>
                @endguest




            </div>

    </nav>
    <div class="services">
        <div class="icones-service">
            <ul>
                <li><a href=""><img src="{{ asset('image/cozinheiro.jpg') }}" alt="">Cozinheira</a></li>
                <li><a href=""><img src="{{ asset('image/faxina.png') }}" alt="">Diarista</a></li>
                <li><a href=""><img src="{{ asset('image/encanador.png') }}" alt="">Encanador</a></li>
                <li><a href=""><img src="{{ asset('image/eletricista.png') }}" alt="">Eletricista</a></li>
                <li><a href=""><img src="{{ asset('image/jardineiro.png') }}" alt="">Jardineiro</a></li>
                <li><a href=""><img src="{{ asset('image/lavadeira.png') }}" alt="">Lavadeira</a></li>
                <li><a href=""><img src="{{ asset('image/passadeira.png') }}" alt="">Passadeira</a></li>
                <ul>
        </div>
    </div>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/cores.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mediaquery.min.css') }}">
    <title>LociLab</title>
</head>

<body>
    <div class="ante-header bg-primary">
        <div class="container">
            <div class="navegacao">
                <div class="row">
                    <div class="email text-md-start text-center col-md-6 col-12 py-md-2">
                        <i class="bi bi-envelope-fill text-light"></i>
                        <span class="text-light">atendimento@locilab.com.br</span>
                    </div>
                    <div class="redes-sociais text-md-end text-center col-md-6 col-12 py-md-2">
                        <a class="text-light" target="_blank"
                            href="https://www.facebook.com/profile.php?id=100080642630494"><i
                                class="fs-5 bi bi-facebook"></i></a>
                        <a class="text-light" target="_blank" href="https://www.instagram.com/loci_lab/"><i
                                class="fs-5 bi bi-instagram"></i></a>
                        <a class="text-light" target="_blank" href="https://wa.me/553197370135"><i
                                class="fs-5 bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <header id="header">
        <div class="container">
            <div class="menu-centralizado">
                <a href="/" class="logo d-flex align-items-center mb-3 mb-md-0  text-decoration-none">
                    <img src="{{ url('img/logo01.png') }}" alt="">
                </a>

                <nav id="nav">
                    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                        aria-expanded="false">
                        <span id="hamburger"></span>
                    </button>
                    <ul class="nav" id="menu" role="menu">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sorologia') }}" class="nav-link ">Sorologia</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dna') }}" class="nav-link">Dna</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('perguntas-frequentes')}}" class="nav-link ">Perguntas Frequentes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">Solicite seu exame</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-secondary">AREA DO VETERINARIO</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
    <main class="mb-5">
        @yield('content')
    </main>
    <footer class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 info">
                    <div>
                        <h4 class="text-uppercase">Contatos</h4>
                        <p>
                            31 3681-4331 <br>
                            <a class="text-light" target="_blank" href="https://wa.me/553197370135">
                                31 99737-0135 <i class="fs-5 mx-2 bi bi-whatsapp"></i> <br>
                            </a>
                            atendimento@locilab.com.br

                        </p>
                    </div>
                </div>
                <div class="col-md-4 info">
                    <div>
                        <h4 class="text-uppercase">Localização</h4>
                        <p>
                            Rua Coronel Durães, 170, slj 01, <br>
                            Bela Vista - Lagoa Santa l MG <br>
                            CEP: 33239-206 <br>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 info ">
                    <div class="">
                        <h4 class="text-uppercase">Siga-nos</h4>
                        <a class="text-light fs-3 mx-2" target="_blank"
                            href="https://www.facebook.com/profile.php?id=100080642630494"><i
                                class="bi bi-facebook"></i></a>
                        <a class="text-light fs-3 mx-2" target="_blank" href="https://www.instagram.com/loci_lab/"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="copyright">
        <div class="text-center py-1">
            <p class="text-light my-auto">Labloci © 2022 Todos os Direitos Reservados </p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>

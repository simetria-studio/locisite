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
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/cores.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <title>LociLab</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand img-fluid" href="{{ url('/') }}"><img src="/img/loci-logo.png"
                        alt=""></a>
                <div class="sociais-top d-md-none">
                    <li>
                        <a target="_blank" href="https://www.instagram.com/loci_lab/"><i
                                class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=553197370135&text&type=phone_number&app_absent=0"><i
                                class="bi bi-whatsapp"></i></a>
                    </li>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" id="sobre-nos" href="{{ url('sobre-nos') }}">Sobre Nós</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ url('sorologia') }}">Sorologia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('dna') }}">DNA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contato') }}">Contato</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('noticias') }}">Notícias</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#">Compre aqui</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-secondary text-light" target="_blank"
                                href="https://www.portalgeeklab.com.br/portal/">Área do
                                Veterinário</a>
                        </li>
                    </ul>
                </div>
                <div class="sociais-top d-none  d-md-flex">
                    <li>
                        <a target="_blank" href="https://www.instagram.com/loci_lab/"><i
                                class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=553197370135&text&type=phone_number&app_absent=0"><i
                                class="bi bi-whatsapp"></i></a>
                    </li>
                </div>
            </div>
        </nav>
    </header>
    <main class="mb-5">
        @yield('content')
    </main>
    <!-- PRÉ    FOOTER -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 mb-5 mx-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Contatos <i class="bi bi-telephone"></i></h5>
                        <p class="card-text">31 3681-4331 <br>
                            31 99737-0135 <br>
                            atendimento@locilab.com.br
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 mb-5  mx-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Localização <i class="bi bi-geo-alt"></i></h5>
                        <p class="card-text">
                            Rua Coronel Durães, 170, slj 01, <br> Bela Vista - Lagoa Santa l MG <br>
                            CEP: 33239-206
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white">
        <div class="container">
            <section class="py-3">
                <form action="">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-auto">
                            <p>
                                <strong>Assine nossa Newslatter</strong>
                            </p>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example29" class="form-control"
                                    placeholder="Endereço de E-mail" />
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Assinar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
            <div class="row text-center">
                <!-- REDES SOCIAIS  -->
                <div class="col-md-4 sociais mb-2">
                    <li>

                        <a target="_blank" href="https://www.instagram.com/loci_lab/"><i
                                class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=553197370135&text&type=phone_number&app_absent=0"><i
                                class="bi bi-whatsapp"></i></a>
                    </li>
                </div>
                <!-- COPYRIGHT -->
                <div class="col-md-4 mb-2">
                    © 2022 Copyright:
                    <a class="text-white" href="#">LOCI LAB</a>
                </div>
                <!-- Patrocinios -->
                <div class="col-md-4 patrocinios mb-2">
                    <img class="img-fluid" src="/img/inmetro.png" alt="">
                    <img class="img-fluid" src="/img/isag.png" alt="">
                    <img class="img-fluid" src="/img/minis.png" alt="">
                </div>
            </div>
        </div>


    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <script>
        $('#mostrar').click(
            function() {
                $('#genotipagem').toggle('slow')
            }
        );
        $('#mostrar1').click(
            function() {
                $('#homozigoze').toggle('slow')
            }
        );
        $('#mostrar3').click(
            function() {
                $('#caseina').toggle('slow')
            }
        )
    </script>
</body>

</html>

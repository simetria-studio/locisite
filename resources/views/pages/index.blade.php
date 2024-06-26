@extends('main.main')

@section('content')
    <div class="principal">


        {{-- Banner principal --}}
        <div class="banner-principal mb-5 ">
            <section class="galeria">
                <img src="{{ url('img/banner01.jpeg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner02.jpg') }}" class="foto img-fluid" alt="">
                {{-- <img src="{{ url('img/banner04.jpg') }}" class="foto img-fluid" alt=""> --}}
                <img src="{{ url('img/banner05.jpg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner06.jpg') }}" class="foto img-fluid" alt="">
            </section>

            <div class="container link-principal ">
                <div class="text-banner">
                    <h1 class="text-uppercase text-light text-center text-md-start">
                        Na Loci você <br> pode confiar!
                    </h1>
                </div>
                <div class="action-banner text-center text-md-start">
                    <a href="{{ url('sobre-nos') }}" class="btn btn-lg btn-primary mb-2">VER MAIS</a>
                    <a href="{{ url('formularios') }}" class="btn btn-lg btn-secondary mb-2">SOLICITE AGORA</a>
                </div>
            </div>
            {{-- Cards do banner --}}

        </div>
        <div class="cards slide-in-left d-none d-md-block mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3  mb-3">
                    <div class="card card-banner mx-auto bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('img/card-equino.png') }}" class="" alt="">
                            </div>
                            <div class="text-light">
                                <h4 class="text-center text-secondary">Equinos</h4>
                                <p class="card-text text-center text-light">
                                    A criação de cavalos caracteriza-se como uma importante fonte de negócios no Brasil
                                    movimentando
                                    cifras na casa dos bilhões de reais...
                                </p>
                            </div>
                        </div>
                        <div class="card-footer bg-secondary text-center">
                            <a href="{{ url('equinos') }}">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3   mb-3">
                    <div class="card card-banner mx-auto bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('img/leucemiasagudas.jpg') }}" class="" alt="">
                            </div>
                            <div class="text-light">
                                <h4 class="text-center text-secondary">Leucemias</h4>
                                <p class="card-text text-center text-light">
                                    As leucemias são doenças genéticas que possuem marcadores específicos e que podem ser
                                    utilizados para diagnosticar o tipo exato de leucemia que o paciente tem.
                                </p>
                            </div>

                        </div>
                        <div class="card-footer bg-secondary text-center">
                            <a href="{{ route('leucemias') }}">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3   mb-3">
                    <div class="card card-banner mx-auto bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('img/covid.jpg') }}" class="" alt="">
                            </div>
                            <div class="text-light">
                                <h4 class="text-center text-secondary">Testes Rápidos</h4>
                                <p class="card-text text-center text-light">
                                    Disponibilizamos os testes rápidos para DENGUE, COVID, INFLUENZA e CHIKUNGUNYA no conforto da sua casa.
                                </p>
                            </div>

                        </div>
                        <div class="card-footer bg-secondary text-center">
                            <a href="{{ route('leucemias') }}">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

       
            </div>
        </div>


        {{-- Servicos --}}
        <div class="services slide-in-right container d-md-block   mb-5  ">
            <div class="">
                <h2 class="mb-5 text-primary">Nossos Serviços</h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-6 col-md-4 col-xl-2  mb-3">
                    <div class="link text-center">

                        <a href="{{ url('genotipagem') }}">
                            <img src="/img/emoji-dna.png" class="mb-1" alt=""> <br>
                            Genotipagem Animal
                        </a>

                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2   mb-3">
                    <div class="link text-center">
                        <a href="{{ url('parentesco') }}">
                            <img src="{{ asset('img/parentesco.png') }}" class="mb-1" alt=""> <br>
                            Verificação de Parentesco
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2  mb-3 ">
                    <div class="link text-center ">
                        <a href="{{ url('homozigoze') }}">
                            <img src="/img/Cavalo.png" class="mb-1" alt=""><br>
                            Homozigoze <br> Tobiana
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-xl-2  mb-3">
                    <div class="link text-center ">
                        <a href="{{ url('beta-caseina') }}">
                            <img src="/img/caseina.png" class="mb-1" alt=""><br>
                            Beta Caseína <br> Bovina
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4  col-xl-2  mb-3">
                    <div class="link text-center">
                        <a href="{{ url('leucemias') }}">
                            <img src="{{ asset('img/globulos.png') }}" class="img-fluid mb-1" alt=""><br>
                            Leucemias
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4  col-xl-2  mb-3">
                    <div class="link text-center">
                        <a href="{{ url('teste.rapidos') }}">
                            <img src="{{ asset('img/covid.jpg') }}" class="img-fluid mb-1" alt=""><br>
                            Testes Rápidos
                        </a>
                    </div>
                </div>
                {{--  <div class="col-6 col-md-4 col-xl-2   mb-3">
                    <div class="link text-center">
                        <a href="{{ url('mormo') }}">
                            <img src="{{ asset('img/mormo.png') }}" class="mb-1" alt=""> <br>
                            Mormo
                        </a>
                    </div>
                </div> --}}

            </div>
        </div>

        {{-- Card center  --}}
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6 order-1  ">
                    <div class="card-mid">
                        <div class="slide-in-left ">
                            <h5 class="text-primary">
                                PORQUE ESCOLHER A LOCI GENÉTICA LABORATORIAL?
                            </h5>
                            <p>
                                Somos uma equipe de cientistas fiéis aos princípios da ética, da competência técnica e da
                                segurança dos resultados produzidos;
                            </p>
                            <p>
                                Colocamos nosso conhecimento à disposição do nosso cliente e da maneira como ele quiser:
                                pelo
                                telefone, por e-mail, na sua propriedade, escritório ou eventos;
                            </p>
                            <p>
                                Somos transparentes e responsáveis sobre tudo aquilo que colocamos a serviço do nosso
                                cliente;
                            </p>
                            <p>
                                Buscamos aprimoramento técnico, modernização dos nossos equipamentos e métodos nos alinhando
                                com
                                os mais modernos centros de genética do mundo;
                            </p>
                            <p>
                                Estamos em constante evolução dos processos de gestão buscando estratégias inovadoras de
                                mercado
                                sempre com o objetivo de trazer praticidade e solução para o nosso cliente;
                            </p>
                            <p>
                                Somos movidos pelo desejo de fazer mais e melhor;
                            </p>
                            <p>
                                Contamos com os nossos clientes para nossos processos de melhoria contínua;
                            </p>
                            <p>
                                Como bons mineiros, queremos servir e acolher as necessidades do nosso cliente;
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 mb-3">
                    <div class="card-img-mid slide-in-right ">
                        {{-- <img src="{{ asset('img/01.png') }}" class="img-fluid" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>


        {{-- Patrocinios E Qualidades de Serviços  --}}

        <div class="container">
            <div class="mb-3">
                <h3 class="text-primary">Garantia de Qualidade</h3>
            </div>
        </div>
        <div class="qualidades">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="patrocinios">
                            <img src="{{ asset('img/isag.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="patrocinios">
                            <img src="{{ asset('img/minis.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="patrocinios">
                            <img src="{{ asset('img/inmetro.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="patrocinios">
                            <img src="{{ asset('img/imap.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup">
        <img class="pop-bn" onclick="redirectWhatsapp()" src="{{ asset('img/banner2.jpg') }}" alt="">
        <button id="close-popup">FECHAR</button>
    </div>
    <style>
        #popup {
            /* display: none; */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            width: 450px;
            box-shadow: 0px 0px 10px gray;
            z-index: 9999;
        }

        .pop-bn {
            width: 100%;
            cursor: pointer;

        }

        #popup button {
            float: right;
            background-color: transparent;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        #popup button:hover {

            background-color: #ccc;

        }
    </style>
@endsection
@section('js')
    <script>
        function redirectWhatsapp() {
            window.location.href =
                "https://api.whatsapp.com/send?phone=5531997370135&text=Olá, gostaria de mais informações sobre os serviços da Loci Genética Laboratorial.";
        }

        function createCookie(name, value, days) {
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        $(document).ready(function() {
            if (!readCookie("popup")) {
                $("#popup").show();
            }
            $("body").click(function(event) {
                if (!$(event.target).closest("#popup").length) {
                    $("#popup").hide();
                }
            });

            $("#close-popup").click(function() {
                $("#popup").hide();
                createCookie("popup", "shown", 7);
            });
        });
    </script>
@endsection

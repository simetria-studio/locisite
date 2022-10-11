@extends('main.main')

@section('content')
    <div class="principal">


        {{-- Banner principal --}}
        <div class="banner-principal mb-5 ">
            <section class="galeria">
                <img src="{{ url('img/banner01.jpeg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner02.jpg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner03.jpg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner04.jpg') }}" class="foto img-fluid" alt="">
                <img src="{{ url('img/banner05.jpg') }}" class="foto img-fluid" alt="">

            </section>

            <div class="container">
                <div class="text-banner">
                    <h1 class="text-uppercase text-light text-center text-md-start">
                        Na Loci você <br> pode confiar!
                    </h1>
                </div>
                <div class="action-banner text-center text-md-start">
                    <a href="{{ url('sobre-nos') }}" class="btn btn-lg btn-primary mb-2">VER MAIS</a>
                    <a href="{{url('formularios')}}" class="btn btn-lg btn-secondary mb-2">SOLICITE AGORA</a>
                </div>
            </div>
            {{-- Cards do banner --}}

        </div>
        <div class="cards slide-in-left d-none d-md-block mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3  mb-3">
                    <div class="card card-banner mx-auto bg-secondary">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('img/card-equino.png') }}" class="" alt="">
                            </div>
                            <div class="text-light">
                                <h4 class="text-center text-primary">Equinos</h4>
                                <p class="card-text text-center text-light">
                                    A criação de cavalos caracteriza-se como uma importante fonte de negócios no Brasil movimentando
                                    cifras na casa dos bilhões de reais...
                                </p>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ url('equinos') }}">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3   mb-3">
                    <div class="card card-banner mx-auto bg-secondary">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('img/card-bovino.png') }}" class="" alt="">
                            </div>
                            <div class="text-light">
                                <h4 class="text-center text-primary">Bovinos</h4>
                                <p class="card-text text-center text-light">
                                    O Brasil tem o maior rebanho bovino do mundo, com 222 milhões de animais, segundo dados
                                    do
                                    Ministério da Agricultura, Pecuária e Abastecimento...
                                </p>
                            </div>

                        </div>
                        <div class="card-footer text-center">
                            <a href="{{url('bovinos')}}">SAIBA MAIS <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 colum mb-3">
                    <div class="card card-banner card3 bg-light">
                        <div class="card-body">
                            <h3 class="card-title py-4 text-primary text-uppercase">
                                Exame de DNA 15 dias por apenas R$ 65,00
                                {{-- COMPRE PELA NOSSA LOJA <br>
                                ONLINE COM TODA PRATICIDADE --}}
                            </h3>
                            <p class="card-text mb-5">
                              Solicite seus exames de DNA com toda praticidade e segurança, clicando no botão abaixo.
                            </p>
                            <a href="{{url('formularios')}}" class="btn btn-lg btn-outline-secondary">SOLICITE AGORA</a>
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
            <div class="row ">
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
                        <a href="{{ url('aie') }}">
                            <img src="{{ asset('img/aie.png') }}" class="img-fluid mb-1" alt=""><br>
                            AIE
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2   mb-3">
                    <div class="link text-center">
                        <a href="{{ url('mormo') }}">
                            <img src="{{ asset('img/mormo.png') }}" class="mb-1" alt=""> <br>
                            Mormo
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- Card center  --}}
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6 order-1  ">
                    <div class="card-mid">
                        <div>
                            <h5 class="text-primary">
                                PORQUE ESCOLHER A LOCI GENÉTICA LABORATORIAL?
                            </h5>
                            <p>
                                Somos uma equipe de cientistas fiéis aos princípios da ética, da competência técnica e da
                                segurança dos resultados produzidos;
                            </p>
                            <p>
                                Colocamos nosso conhecimento a disposição do nosso cliente e da maneira como ele quiser:
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
                    <div class="card-img-mid ">
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
@endsection

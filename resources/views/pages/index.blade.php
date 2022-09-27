@extends('main.main')

@section('content')
    <div id="carouselExampleDark" class="carousel1  carousel carousel-fade  mb-5 " data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active " data-bs-interval="2000">
                <img src="{{ url('img/banner1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ url('img/banner2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ url('img/banner3.jpg') }}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ url('img/banner4.jpg') }}" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ url('img/banner5.jfif') }}" class="d-block w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container d-none d-md-block ">
        <div class="row ">
            <div class="col-3 mb-3">
                <div class="card card1  ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/emoji-dna.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Genotipagem Animal</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-3 mb-3 ">
                <div class="card card1 text-center ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/Cavalo.png" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Homozigoze Tobiana</h5>

                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card card1 text-center ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/caseina.png" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Beta Caseína Bovina</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class=" col-3  mb-3">
                <div class="card card1 text-center">
                    <a class="emoji" href="{{ url('sorologia.html') }}">
                        <img src="/img/eos-icons_test-tube.png" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Ensaio Sorológico (AIE e Mormo)</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-block d-md-none mt-5 ">
        <div class="row ">
            <div class="col-6 mb-3">
                <div class="card card-m text-center ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/emoji-dna.png" class="img-fluid" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Genotipagem <br> Animal</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 mb-3 ">
                <div class="card card-m text-center ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/Cavalo.png" class="img-fluid" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Homozigoze <br> Tobiana</h5>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card card-m text-center ">
                    <a class="emoji" href="{{ url('dna') }}">
                        <img src="/img/caseina.png" class="img-fluid" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Beta Caseína <br> Bovina</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-6  mb-3">
                <div class="card card-m text-center">
                    <a class="emoji" href="{{ url('sorologia') }}">
                        <img src="/img/eos-icons_test-tube.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Ensaio Sorológico <br> (AIE e Mormo)</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- DUVIDAS  -->
    <div class="container">
        <div class="duvidas">
            <div class="text-center mb-5">
                <h3>Duvidas frequentes?</h3>
            </div>
            <div class="row">
                <!-- DUVIDAS E SUGESTÕES  -->
                <div class="col-sm-12 col-md-6 mb-3">
                    <div class="card sugestoes text-center mb-5">
                        <img class="img-fluid" src="/img/question.png" alt="">
                        <div class="body-card ">
                            <div class="title-card">
                                <h5>Duvidas ou sugestão? <br>
                                    <a class="contate mb-3" href="/contato.html">Contate-nos</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION DE DUVIDAS FREQUENTES  -->
                <div class="col-sm-12 col-md-6 mb-3 duvidas-frequentes">
                    <div class="accordion mb-5" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Como poderei ver o resultado do meu exame?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Acessando a área do cliente
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Preciso preencher os formulários de solicitação de serviço?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Nossos formulários são todos onlines!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Em quanto tempo receberei meu resultado?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Os resultados dependerão da contratação dos serviços conforme preços e prazos dos exames
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Quais animais nossa soulçao atende?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Nós atendemos equinos, bovinos, asininos e muares
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

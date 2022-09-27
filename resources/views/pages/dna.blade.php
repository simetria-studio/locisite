@extends('main.main')

@section('content')
    <div class="container   ">
        <div class="text-center mb-5"><h4>DNA</h4></div>
        <div class="row ">
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card card1 mx-auto mb-4 ">
                    <button id="mostrar" class="btn  emoji">
                        <img src="/img/emoji-dna.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Genotipagem Animal</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="card mb-5 " id="genotipagem" style="display: none ;">
                    <div class="card-body ">
                        <div class="card-title">
                            <h6 class="text-primary"> EXAME DE GENOTIPAGEM DE
                                EQUINOS, BOVINOS, ASININOS E MUARES
                            </h6>
                        </div>
                        <div class="card-text scrollpsy-site " data-spy="scroll" data-offset="0">
                            <p>
                                Exame realizado para determinação do perfil genético do animal. Esse pode ser
                                armazenado
                                em
                                um banco de resultados de análise de DNA, conhecido como “Arquivo Permanente”, e
                                utilizado
                                posteriormente em análises de verificação de parentesco.
                            </p>
                            <p>
                                A Loci Genética Laboratorial realiza exames de genotipagem animal das espécies
                                bovina,
                                equina, asinina, muar e caprina a partir de amostras biológicas: pelo, sangue e
                                sêmen.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a role="button" href="#" class="btn btn-secondary">Comprar agora</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 mb-3 ">
                <div class="card card1 mx-auto mb-4 ">
                    <button id="mostrar1" class="btn emoji">
                        <img src="/img/Cavalo.png" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Homozigoze Tobiana</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="card mb-5  " id="homozigoze" style="display: none ;">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title text-primary">EXAME DE HOMOZIGOSE TOBIANA
                                (PELAGEM PAMPA)</h6>
                            <div class="card-text scrollpsy-site " data-spy="scroll" data-offset="0">

                                <p>
                                    Em equinos, o padrão de cor de pelagem Tobiana ou Pampa é caracterizado por
                                    predominância de
                                    cor
                                    escura sendo a cor branca responsável pela produção de manchas irregulares que
                                    se
                                    estendem
                                    para
                                    baixo do pescoço e peito.
                                </p>
                                <p>
                                    Esse padrão é controlado geneticamente por um gene dominante de tal forma que
                                    tanto
                                    os
                                    animais
                                    heterozigotos, como os homozigotos tobianos apresentam esse padrão de pelagem.
                                </p>
                                <p>
                                    Os animais homozigotos tobianos só transmitem o gene dominante para sua
                                    progênie, o
                                    que
                                    resulta numa
                                    prole 100% de pelagem Tobiana; já os heterozigotos têm 50% de chance de
                                    transmitir o
                                    gene
                                    mutado
                                    para os seus descendentes.
                                </p>
                                <p>
                                    O exame de Homozigose Tobiana visa a detecção do gene mutado em cópia única
                                    (positivo
                                    heterozigoto
                                    tobiano) ou dupla (positivo homozigoto tobiano) no DNA do animal testado.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a role="button" href="#" class="btn btn-secondary">Comprar agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card card1 mx-auto mb-4 ">
                    <button type="radio" id="mostrar3" name="btnradio" class="btn emoji">
                        <img src="/img/caseina.png" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Beta Caseína Bovina</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="card mb-5 " id="caseina" style="display: none ;">
                    <div class="card">
                        <div class="card-body ">
                            <h6 class="card-title text-primary">EXAME DE BETA CASEÍNA
                                ALELOS A1 E A2</h6>
                            <div class="card-text scrollpsy-site">
                                <p>A beta caseína é uma proteína do leite de bovinos. Em relação ao seu gene, o
                                    alelo A1
                                    determina a
                                    produção da proteína tipo A1 no leite, que está associada a vários problemas
                                    como
                                    intolerância ao
                                    leite, diabetes, distúrbios coronarianos e neurológicos em humanos.
                                </p>
                                <p>O alelo A2 determina a produção da proteína tipo A2, muito valorizada
                                    mundialmente, já que
                                    não está
                                    associada a problemas de saúde humana.
                                </p>
                                <p>Assim, os bovinos podem apresentar os genótipos: A1A1 - transmitirá apenas o
                                    alelo A1 para a
                                    sua
                                    descendência; A1A2- poderá passar tanto o alelo A1 quanto o alelo A2 para a sua
                                    descendência; A2A2 -
                                    portador do genótipo mais desejável, necessariamente transmitirá o alelo A2 para
                                    todos os
                                    descendentes.
                                </p>
                                <p>O teste de Identificação dos Alelos da Beta Caseína permite selecionar touros e
                                    vacas com o
                                    genótipo
                                    A2A2, levando ao aumento da qualidade do leite produzido, bem como à valorização
                                    do rebanho.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a role="button" href="#" class="btn btn-secondary">Comprar agora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

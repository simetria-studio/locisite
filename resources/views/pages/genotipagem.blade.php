@extends('main.main')

@section('content')
    <div class="container mt-5 ">
        <div class="text-center">
            <h3 class="text-uppercase">Genotipagem</h3>
        </div>
        <div class="row">
            <div class=" order-1 col-md-6  content">
                <div class="mb-3 imagem1">

                </div>
                <div class="text-center mb-5">
                    <a class="btn btn-lg d-block  btn-secondary text-light" type="button" href="{{url('formularios')}}" target="_blank"
                        rel="noopener noreferrer">Solicitar agora</a>
                </div>
            </div>
            <div class="col-md-6 content">
                <div class="homozigosedzou">
                    <h6 class=" text-primary text-center">
                        <strong>
                            GENOTIPAGEM animal
                        </strong> <br>
                        <strong>
                            (exame de DNA, teste de paternidade, determinação do perfil genético)​
                        </strong>
                    </h6>
                    <p>
                        <small>
                            <strong>
                                <span class="text-primary">
                                    O que é Genotipagem animal?​<br>
                                </span>
                            </strong>
                            É o exame realizado para determinação do perfil genético do animal. ​
                        </small>
                    </p>
                    <p class="text-start ">
                        <strong>
                            <span class="text-primary">
                                <small>
                                    Para que é usado o exame de GENOTIPAGEM animal? <br>
                                </small>
                            </span>
                        </strong>
                        <small>
                            Após definido o perfil genético do animal ele é armazenado em um banco de resultados de análise
                            de DNA, conhecido como “Arquivo Permanente”, e utilizado posteriormente em análises de
                            verificação de parentesco.​
                        </small>
                    </p>
                    <p class="text-start">
                        <small>
                            <strong>
                                <span class="text-primary">
                                    Para quais espécies a Loci faz GENOTIPAGEM?​
                                    <br>
                                </span>
                            </strong>
                            A Loci Genética Laboratorial realiza exames de genotipagem animal das espécies bovina, equina,
                            asinina, muar e caprina.​
                        </small>
                    </p>
                    <p>
                        <small>
                            <strong>
                                <span class="text-primary">
                                    Em quais amostras e como se faz a coleta para o exame de GENOTIPAGEM animal?<br>
                                </span>
                            </strong>
                            Na Loci realizamos o exame de genotipagem a partir das amostras biológicas: pelo, sangue e
                            sêmen.​​ <br>


                            <ul>
                                <!-- Button trigger modal -->
                                <li>
                                    Orientações de coleta de pelo
                                    <a type="button" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> Clique aqui</a>
                                    <br>
                                </li>
                                <li>
                                    Orientação para coleta de sangue
                                    <a type="button" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2"> Clique aqui</a>
                                    </a>
                                    <br>
                                </li>
                                <li>
                                    Orientação para coleta de sêmen
                                    <a type="button" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal3"> Clique aqui</a>
                                    <br>
                                </li>
                            </ul>

                            
                        </small>
                    </p>
                    <p class="text-start">
                        <small>
                            <strong>
                                <span class="text-primary">
                                    Qual o prazo para realização da GENOTIPAGEM animal?​
                                    <br>
                                </span>
                            </strong>
                            O prazo convencional para realização do exame é de 20 dias úteis. Porém, na Loci possuímos
                            análises de urgência que podem ser de 10 dias úteis, 5 dias úteis, 48 horas ou 24 horas. Nesse
                            caso os valores mudam de acordo com a dedicação exclusiva do técnico e maquinário para o teste.​
                        </small>
                    </p>
                    <h6 class="text-primary text-center">
                        <strong>
                            NA LOCI, O EXAME DE GENOTIPAGEM ANIMAL INCLUI 2 VERIFICAÇÕES DE PARENTESCO GRATUITAS​.
                            NOVAS VERIFICAÇÕES PODEM SER SOLICITADAS DE FORMA AVULSA
                        </strong>
                    </h6>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">
                            Coleta de pelo
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <p>
                                    Escolha o melhor local para realização da coleta, sempre priorizando
                                    fios mais compridos e mais
                                    grossos:
                                </p>
                                <ol>
                                    <li>
                                        <span>Para Bovinos: pelos da cauda;</span>
                                    </li>
                                    <li>
                                        <span>Para Equinos, Asininos e Muares: pelos da cauda ou da
                                            crina;
                                        </span>
                                    </li>
                                    <li>
                                        <span>Para Caprinos: Pelos da cauda, barba ou linha
                                            dorsal.</span>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>
                                    Verifique se os pelos estão secos e limpos, livres de fezes, produto
                                    químico ou ectoparasita;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Enrole, entre 20 e 30 fios, na mão e os segure firme com auxílio dos
                                    dedos indicador e polegar. Puxe
                                    arrancando os pelos com a raiz. Nunca corte os pelos com tesoura,
                                    sempre puxe arrancando-os com
                                    raiz. É
                                    do bulbo capilar (raiz do pelo) que o DNA é extraído para a
                                    realização do exame;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Verifique se os pelos contêm os bulbos intactos, ou seja, se eles
                                    não foram quebrados antes da raiz;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Coloque os pelos coletados dentro do envelope de papel devidamente
                                    identificado. Use um envelope
                                    para
                                    cada amostra coletada;
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>OBSERVAÇÃO:</strong> Limpe ou lave as mãos antes de uma nova
                                    coleta removendo pelos das
                                    mãos e
                                    da roupa.
                                </p>
                            </li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">
                            Coleta de sangue
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <p>
                                    A amostra de sangue deve ser coletada em tubo com anticoagulante <strong>EDTA</strong>
                                    (tampa roxa);
                                </p>
                            </li>
                            <li>
                                <p>
                                    IDENTIFICAR o tubo com o nome e/ou número de registro do animal amostrado.
                                    <strong>OBSERVAÇÃO:</strong>  O
                                    tubo
                                    contendo sangue não pode ser congelado;
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>ENVIAR</strong> as amostras de sangue em caixa de isopor reciclável. Tomar o
                                    cuidado de preencher
                                    os espaços
                                    vazios da caixa com papel amassado para que os tubos não se quebrem durante o
                                    transporte.
                                </p>
                            </li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">
                            COLETA DE SÊMEN
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <ol>
                            <li>
                                <p>
                                    Preencha o nome do animal e o seu número de registro num envelope de papel;
                                </p>

                            </li>
                            <li>
                                <p>
                                    Coloque a palheta de sêmen dentro do envelope e feche-o com cola ou fita adesiva. A
                                    palheta de sêmen pode estar vazia e neste caso será utilizado o sêmen aderido às paredes
                                    da palheta.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Envie por SEDEX para a Loci Genética Laboratorial (Não há necessidade de refrigeração).
                                </p>
                            </li>

                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

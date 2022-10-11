@extends('main.main')

@section('content')
    <div class="container mt-5 ">
        <div class="text-center">
            <h3 class="text-uppercase">Verificação de Parentesco</h3>
        </div>
        <div class="row">
            <div class=" order-1 col-md-6  content">
                <div class="mb-3 imagem2">

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
                            VERIFICAÇÃO DE PARENTESCO

                        </strong> <br>
                        <strong>
                            (genealogia, análise de vínculo, análise de maternidade, análise de paternidade)​​
                        </strong>
                    </h6>
                    <p>
                        <small>
                            <strong>
                                <span class="text-primary">
                                    O que é VERIFICAÇÃO DE PARENTESCO?​<br>
                                </span>
                            </strong>
                            A verificação de parentesco é a comparação dos perfis genéticos dos produtos e dos seus supostos
                            genitores. O objetivo da análise é a qualificação de genitores de um produto com base na
                            comparação da informação genética da progênie com a dos pais em potencial.​​
                        </small>
                    </p>
                    <p class="text-start ">
                        <strong>
                            <span class="text-primary">
                                <small>
                                    Quais as modalidades para VERIFICAÇÃO DE PARENTESCO?​ <br>
                                </small>
                            </span>
                        </strong>
                        <small>
                            É possível realizar a análise de parentesco do produto com a genitora (suposta mãe do animal)
                            nesse caso denominada <strong class="text-primary">VPMD</strong> , análise de parentesco do
                            produto com o genitor (suposto pai) nesse
                            caso denominado <strong class="text-primary">VPMD</strong> ou a análise do produto com a
                            genitora e o genitor (supostos pai e mãe)
                            nesse caso denominado <strong class="text-primary">VPMD</strong> ou análise de trio. Também é
                            possível realizar a verificação de
                            clones nesse caso denominado <strong class="text-primary">CLONE</strong> .​
                        </small>
                    </p>
                    <p class="text-start">
                        <small>
                            <strong>
                                <span class="text-primary">
                                    Para quais espécies a Loci faz VERIFICAÇÃO DE PARENTESCO?​
                                    <br>
                                </span>
                            </strong>
                            A Loci Genética Laboratorial realiza exames de genotipagem animal das espécies <strong>bovina,
                                equina,
                                asinina, muar e caprina.​</strong> <br>

                        </small>
                    </p>
                    <p>
                        <small>
                            <strong>
                                <span class="text-primary">
                                    Em quais amostras e como se faz a coleta para a VERIFICAÇÃO DE PARENTESCO?<br>
                                </span>
                            </strong>

                            As verificações de parentesco podem ser realizadas a partir das análises das amostras biológicas
                            dos envolvidos ou a partir de resultados de DNA realizados previamente e armazenados em
                            “Arquivos Permanentes”.​
                            <br>
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

@extends('main.main')

@section('content')
    <div id="active">
        <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item carousel-item2 active">
                    <img src="/img/sobre.png" class="img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class="row">
                <h3 class="text-primary text-center mb-4"><strong>História da Loci</strong> </h3>
                <div class="col-4">
                    <div id="simple-list-example"
                        class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                        <a class="p-1 rounded " href="#simple-list-item-1">O nascimento</a>
                        <a class="p-1 rounded" href="#simple-list-item-2">A história</a>
                        <a class="p-1 rounded" href="#simple-list-item-3">Os clientes</a>
                        <a class="p-1 rounded" href="#simple-list-item-4">Nossa equipe</a>
                        <a class="p-1 rounded" href="#simple-list-item-5">Proposito</a>
                        <a class="p-1 rounded" href="#simple-list-item-6">Abertos a inovação</a>
                        <a class="p-1 rounded" href="#simple-list-item-7">Queremos ser reconhecidos</a>
                        <a class="p-1 rounded" href="#simple-list-item-8">Nossos valores</a>
                        <a class="p-1 rounded" href="#simple-list-item-9">Contato conosco</a>
                    </div>
                </div>
                <div class="col-8 scrollspy-sobre">
                    <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0"
                        data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                        <h4 id="simple-list-item-1 " class="text-primary">O nascimento</h4>
                        <p>O nascimento da LOCI se deu em 21/01/2014 e foi a consolidação de um desejo empreendedor
                            alinhado a
                            formação e experiência técnica de sua fundadora, Renata Bottrel reforçado pela sua
                            capacidade
                            realizadora, além da sua paixão e senso de contribuição para a ciência!</p>
                        <h4 id="simple-list-item-2" class="text-primary">A história</h4>
                        <p> A história se deu do zero, e a LOCI pôde ser construída nos moldes dos melhores
                            laboratórios de
                            genética do país e sob todos os critérios legais que a habilitariam para a realização de
                            exames
                            especializados.
                        </p>
                        <h4 id="simple-list-item-3" class="text-primary">Os clientes</h4>
                        <p>
                            Os clientes foram conquistados um a um e o nosso nome foi sendo construído como uma
                            opção segura e
                            de qualidade no mercado. Até aqui, já foram milhares de exames realizados e estamos
                            prontos para
                            muitos mais!
                        </p>
                        <h4 id="simple-list-item-4" class="text-primary">Nossa equipe</h4>
                        <p>
                            Nossa equipe é formada por especialistas e pessoas treinadas e preparadas para seguir
                            todos os
                            critérios técnicos e processuais na realização dos exames ofertados.
                        </p>
                        <h4 id="simple-list-item-5" class="text-primary">Temos um propósito</h4>
                        <p> Temos um propósito inspirador e nossa missão é <strong>REALIZAR EXAMES ESPECIALIZADOS
                                DAS MAIS VARIADAS
                                ESPÉCIES USANDO AS TÉCNICAS DE GENÉTICA MOLECULAR MAIS MODERNAS, SEGURAS E DE
                                REFERÊNCIA NO MERCADO.</strong>
                        </p>
                        <h4 id="simple-list-item-6" class="text-primary">Somos abertos a inovação</h4>
                        <p>Aqui, somos abertos a inovação e temos um desejo enorme de fazer diferença na vida das
                            pessoas e
                            contribuir com a ciência do nosso país!
                        </p>
                        <h4 id="simple-list-item-7" class="text-primary">Queremos ser reconhecidos</h4>
                        <p>
                            Queremos ser reconhecidos nacionalmente, pelos nossos clientes, pela nossa
                            <strong>QUALIDADE,
                                COMPETÊNCIA
                                TÉCNICA, AGILIDADE E EXCELÊNCIA NO ATENDIMENTO.</strong>
                        </p>
                        <h4 id="simple-list-item-8" class="text-primary"> Nossos valores</h4>
                        <p>
                            Nossos valores são a <strong>CONFIANÇA, ÉTICA, RIGOR TÉCNICO, RESPONSABILIDADE, RESPEITO
                                ÀS
                                PESSOAS E PAIXÃO</strong>
                            PELO QUE FAZ! Temos um canal aberto com os nossos clientes, parceiros, fornecedores e
                            nos colocamos
                            a disposição para construir a sua melhor solução que pode ser, além da qualidade, o
                            prazo, a
                            logística, o suporte técnico e a praticidade.
                        </p>
                        <h4 id="simple-list-item-9" class="text-primary">Contato conosco</h4>
                        <p>
                            Faça um contato conosco, teremos satisfação em te ouvir.
                        </p>
                    </div>
                </div>

                <div class="col-12 mb-5">
                    <div class="text-center text-primary mb-3">
                        <h3><strong>Diretoria da Loci</strong></h3>
                    </div>
                    <div class="card mb-5">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/img/IMG_0768.webp" class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Diretoria Técnica</h5>
                                    <p class="card-text scrollpsy-d">
                                        "Meu nome é Renata. Sou uma mulher forte e corajosa! Tenho 3 filhos jovens,
                                        Victor, Lucas e Amanda. Todos lindos, por dentro e por fora, e com uma
                                        capacidade enorme de me estimular a ser cada dia um ser humano melhor e a
                                        realizar sempre mais! O conhecimento e a qualidade são valores
                                        importantíssimos para mim. Sempre amei estudar, aprender coisas novas e
                                        fazer tudo com muito capricho! Sou uma bióloga apaixonada pelo DNA, a
                                        molécula da vida no planeta Terra. Me dediquei durante muitos anos ao seu
                                        estudo, por meio de Graduação, Mestrado e Doutorado na UFMG atuando em
                                        diversas linhas de pesquisa, entre as mais pioneiras e avançadas do
                                        Instituto de Ciências Biológicas. No mercado de trabalho, por 11 anos, tive
                                        a oportunidade de atuar na área de desenvolvimento de novos processos e
                                        produtos de grandes laboratórios de diagnósticos humanos e veterinários. Há
                                        oito anos, resolvi empreender, e com o apoio de pessoas que me amam demais,
                                        foi possível concretizar o sonho de fundar um laboratório de diagnóstico
                                        molecular: Loci Genética Laboratorial. Aqui, visamos utilizar o nosso
                                        conhecimento técnico, especializado, inovador, prático, na melhoria da
                                        qualidade da vida! Contamos com uma equipe forte, qualificada, competente,
                                        dedicada, resiliente e com uma vontade enorme de fazer. Tudo com muita
                                        qualidade, responsabilidade, carinho e dedicação ao nosso cliente! Estamos
                                        alinhados com a ideia de agregar pessoas para o nosso crescimento. Esse é o
                                        nosso DNA, a nossa essência, que desejamos que cresça, apareça, seja
                                        reconhecido e prospere!"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Diretoria Administrativa</h5>
                                    <p class="card-text scrollpsy-d">
                                        "Sou a Cristiane, mãe de um filho e uma filha lindos, licenciada e Bacharel
                                        em Ciências Biológicas pela UFMG, Mestre em Genética também pela UFMG e
                                        possuo MBA em Gestão de Empresas pelo Centro Universitário UNA. Fui
                                        professora da rede pública por alguns anos, sou professora de pós-graduação
                                        e minha maior experiência, marcante em todos os sentidos, se deu como
                                        Especialista e Coordenadora de uma das áreas mais importantes, para uma das
                                        líderes nacionais de medicina laboratorial, onde desenvolvi produtos
                                        especializados na área de Genética, estruturei processos, estabeleci os
                                        recursos e equipe técnica e ainda planejei e implementei a área de P&D que
                                        desde então se desenvolveu e é uma grande referência para diversas empresas
                                        no país. Empreendi por duas vezes e tive oportunidade de desenvolver as
                                        competências de gestão de negócios, comercial e de pessoas. Na LOCI tenho a
                                        oportunidade de reunir todas as habilidades e competências desenvolvidas nas
                                        minhas experiências anteriores a uma grande paixão que é a Genética e a um
                                        grande sonho, de infância, que é de trabalhar com animais! Aqui, meu
                                        compromisso é de colocar o meu propósito de vida em prol do propósito da
                                        LOCI que é de trazer para o mercado técnicas modernas de análises genéticas
                                        por meio do uso da biologia molecular e oferecer soluções práticas e de
                                        excelência para os nossos clientes seguindo os critérios técnicos exigidos
                                        em legislação."
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="/img/CRISTIANE.webp" class="img-fluid " alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

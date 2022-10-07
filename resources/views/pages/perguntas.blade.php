@extends('main.main')

@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="text-primary">DNA</h3>
        </div>
        <div class="perguntas  mb-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Qual amostra biológica eu devo coletar para fazer exame de DNA?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-light">
                            <p>Laboratório Loci nós somos credenciados para realizar o exame no pelo, no sêmen e no sangue.
                        </div>
                        </p>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3 ">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Meu veterináio pode colher a amostra para o exame de DNA que será utilizado para registro do
                            animal?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-light">
                            <p>Não, para exames oficiais a associação da raça deve ser acionada e providenciará um técnico
                                registrado para a coleta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            Qual o prazo para liberação do exame de DNA?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text-light">
                            <p>Após confirmado o pagamento do exame, são 20 dias úteis para a liberação do resultado. Na
                                Loci
                                possuímos opções de exames com prazos de 10, 5, 2 e 1 dia para liberação com a mesma
                                qualidade e
                                segurança.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header4">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                            aria-controls="collapse4">
                            Se os supostos genitores do seu animal já têm exame de DNA, eu preciso repetir o exame deles para fazer a verificação de parentesco?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="header4"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                Não precisa, basta que você ou a associação da raça informe os nomes dos genitores no
                                Formulário
                                que faremos a comparação com o perfil genético encontrado no arquivo permanente
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header5">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                            aria-controls="collapse5">
                            Como devo proceder no caso de verificação de parentesco que nao qualificou o genitor ou a genitora?
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="header5"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                Se existe a possibilidade de outro animal da propriedade ser o genitor ou a genitora, devo
                                solicitar uma verificação de parentesco avulsa com indicação do suposto genitor ou genitora.
                                Se
                                não existe outro animal para verificação e tenho certeza que esse é o genitor, deve-se fazer
                                um
                                contato direto com o laboratório para esclarecimento do resultado pois pode haver problemas
                                com
                                o laudo dos genitores.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header6">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false"
                            aria-controls="collapse6">
                            Quantos marcadores genéticos são analisado e quanto desqualificam o vínculo do animal? 
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="header6"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                Para cada espécie é definido um número de marcadores específico e a desqualificação de um
                                marcador se confirmada, é suficiente para desqualificá-lo. Na Loci seguimos rigorosamente as
                                determinações do MAPA para as análises dos marcadores genéticos estabelecidos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-5">
            <h3 class="text-primary">SOROLOGIA</h3>
        </div>
        <div class="perguntas  mb-5">
            <div class="accordion  " id="accordionExample">

                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header7">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false"
                            aria-controls="collapse7">
                            Preciso realizar o exame de AIE e/ou Mormo, posso contratar um veterinário ou técnico para colher a amostra A, amostra D animal?
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="header7"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                deve ser coletada por médico veterinário com registro de habilitação comprovada para coleta
                                de
                                amostras de AIE/MORMO pelo MAPA.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header8">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false"
                            aria-controls="collapse8">
                            Porque o labaratório não aceita realizar o exame se a requisição tiver campos em branco, rasuras ou sem assinatura/carimbo
                        </button>
                    </h2>
                    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="header8"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                Porque esse é uma exigência dos órgãos reguladores e fiscalizadores que não aceitarão o
                                resultado em qualquer uma dessas situações.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item bg-secondary mb-3">
                    <h2 class="accordion-header" id="header9">
                        <button class="accordion-button collapsed btn btn-outline-primary" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false"
                            aria-controls="collapse9">
                            Em caso de resultado positivo para AIN/MORMO, quais os próximos passos?
                        </button>
                    </h2>
                    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="header8"
                        data-bs-parent="accordionExample">
                        <div class="accordion-body text-light">
                            <p>
                                No caso de resultado positivo, os órgãos competentes serão obrigatoriamente comunicados pelo
                                próprio laboratório conforme instrução normativa e serão tomadas as providências sobre a
                                contraprova dos mesmos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
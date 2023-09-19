@extends('main.main')

@section('title', 'Diagnóstico Molecular de Leucemias | ')

@section('content')
    <div class="container">
        <div class="text-center">
            <h3 class="text-uppercase">DIAGNÓSTICO MOLECULAR DE LEUCEMIAS</h3>
            <h4 class="text-danger text-center">Método: RT-PCR</h4>
        </div>
        <div class="row">
            <div class=" order-1 col-md-6  content">
                <div class="mb-3 imagem7"></div>
                <div class="text-center mb-5">
                    <a class="btn btn-lg d-block  btn-secondary text-light" type="button" href="{{ url('img/oncohematologia.pdf') }}" download="FOR.ATN.15 v.4 - Ficha de Solicitação de Exames Moleculares de Oncohematologia.pdf"
                        target="_blank">Solicitar agora</a>
                </div>
            </div>
            <div class="col-md-6 content">
                <div class="text-center">
                    <h4 class="text-center">
                        <strong>
                            ​Qual o objetivo desse exame?
                        </strong>
                    </h4>
                    <p>
                        <small>
                            Já se sabe que as leucemias são doenças genéticas e que a maioria dos tipos de leucemias possuem
                            marcadores genéticos específicos e que podem ser utilizados para diagnosticar o tipo exato de
                            leucemia que o paciente tem. Por exemplo, a Leucemia Mielóide Crônica possui a translocação dos
                            genes BCR/ABL como marcador diagnóstico, a Leucemia Mielóide Aguda M3 possui a translocação dos
                            genes PML/RARA como marcador diagnóstico e do mesmo modo, outras leucemias possuem marcadores
                            genéticos associados.
                        </small>
                    </p>
                    <p>
                        <small>
                            Sendo assim, esse exame tem por objetivo detectar a presença do marcador genético para se
                            definir o tipo específico de leucemia que acomete o paciente.
                        </small>
                    </p>
                    <strong>Como esse exame pode contribuir para o tratamento/cura do paciente?</strong>
                    <p>
                        <small>
                            Para cada tipo de leucemia existe um tratamento específico, portanto ao detectar o marcador
                            genético e definir o tipo específico de leucemia, é possível determinar o melhor tratamento e
                            isso deve acontecer o mais rápido possível pois quanto mais precoce o início do tratamento,
                            maior será a chance de cura.
                        </small>
                    </p>
                    <strong>Qual o material utilizado para fazer o exame e em quanto tempo ele fica pronto?</strong>
                    <p>
                        <small>
                            O material indicado para realizar esse exame é a medula óssea e a coleta é chamada de Biópsia de
                            Medula Óssea e deve ser realizada por um médico experiente. Ao ser coletada, a amostra deve ser
                            encaminhada imediatamente para o laboratório juntamente com a solicitação médica e o formulário
                            de solicitação preenchidos.
                        </small>
                    </p>
                    <p>
                        <small>
                            Após dar entrada no laboratório, o exame estará pronto em 5 dias úteis.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

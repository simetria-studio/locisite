@extends('main.main')

@section('content')
    <div class="container   ">
        <div class="text-center mb-5"><h4>Sorologia</h4></div>
        <div class="row ">
            <div class="col-sm-6 col-md-12 mb-3">
                <div class="card card1 mx-auto mb-4 ">
                    <button type="radio" name="btnradio" id="mostrar" class="btn  emoji">
                        <img src="/img/eos-icons_test-tube.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>AIE e Mormo</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="card mb-5 " id="genotipagem" style="display:none ;">
                    <div class="card-body">
                        <div class="card-title">
                            <h6 class="text-primary">EXAME DE ANEMIA INFECCIOSA EQUINA (AIE)
                                E MORMO
                            </h6>
                        </div>
                        <div class="card-text scrollpsy-site" data-spy="scroll" data-offset="0">
                            <p>
                                Anemia Infecciosa Equina (AIE) e Mormo são doenças que acometem os cavalos, os
                                jumentos e os muares ou burros.
                            </p>
                            <p>
                                A Anemia Infecciosa Equina (AIE) é uma doença viral de ocorrência em todos os
                                estados do Brasil, de extrema importância no aspecto sanitário e econômico. A AIE
                                pode levar à morte muitos dos animais acometidos, bem como tornar potentes
                                disseminadores da doença outros indivíduos que são portadores assintomáticos.
                            </p>
                            <p>
                                O Mormo é uma doença infectocontagiosa, causada pela bactéria Burkholderia mallei,
                                que acomete principalmente os equídeos podendo, ainda, acometer o homem. Trata-se,
                                portanto, de uma zoonose.
                            </p>
                            <p>
                                Os equídeos que serão transportados de um município a outro ou para outro estado,
                                que
                                irão participar de algum tipo de aglomeração, feiras, exposições, vaquejadas e
                                competições de outras naturezas, necessariamente precisam portar uma Guia de
                                Trânsito Animal (GTA). Para obter essa guia, devem ter exame de AIE e Mormo
                                negativo.
                            </p>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a role="button" href="#" class="btn btn-secondary">Comprar agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('main.main')

@section('content')
    <div class="container   ">
        <div class="text-center mb-5">
            <h4>DNA</h4>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3 mb-3">
                <div class="card card1 mx-auto mb-4 ">
                    <a href="{{ url('genotipagem') }}" class="btn emoji">
                        <img src="/img/emoji-dna.png" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Genotipagem Animal</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-sm-6  col-md-3 mb-3">
                <div class="card card1 mx-auto mb-4">
                    <a class="btn emoji" href="{{ url('parentesco') }}">
                        <img src="{{ asset('img/parentesco.png') }}" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Verificação de Parentesco</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 ">
                <div class="card card1 mx-auto mb-4 ">
                    <a type="button" href="{{ url('homozigoze') }}" class="btn emoji">
                        <img src="/img/Cavalo.png" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Homozigoze Tobiana</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <div class="card card1 mx-auto mb-4 ">
                    <a type="button" href="{{ url('beta-caseina') }}" class="btn emoji">
                        <img src="/img/caseina.png" alt="">
                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Beta Caseína Bovina</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

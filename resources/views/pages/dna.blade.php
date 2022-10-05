@extends('main.main')

@section('content')
    <div class="container   ">
        <div class="text-center mb-5">
            <h4>DNA</h4>
        </div>
        <div class="row ">
            <div class="col-sm-6 col-md-3 mb-3">
                <div class="link text-center">
                    <a href="{{ url('genotipagem') }}">
                        <img src="/img/emoji-dna.png" class=" mb-2" alt=""> <br>
                        Genotipagem Animal
                    </a>
                </div>
            </div>
            <div class=" col-sm-6  col-md-3 mb-3">
                <div class="link text-center">
                    <a href="{{ url('parentesco') }}">
                        <img src="{{ asset('img/parentesco.png') }}" class=" mb-2" alt=""> <br>
                        Verificação de Parentesco
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3 ">
                <div class="link text-center ">
                    <a type="button" href="{{ url('homozigoze') }}">
                        <img src="/img/Cavalo.png" class=" mb-2" alt=""> <br>
                        Homozigoze Tobiana
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <div class="link text-center ">
                    <a type="button" href="{{ url('beta-caseina') }}">
                        <img src="/img/caseina.png" class=" mb-2" alt=""> <br>
                        Beta Caseína Bovina
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

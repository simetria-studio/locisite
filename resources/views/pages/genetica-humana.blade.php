@extends('main.main')

@section('title', 'Genética Humana | ')

@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h4>Diagnósticos</h4>
        </div>
        <div class="row justify-content-center align-items-center genetica-content">
            <div class="col-sm-6 col-md-3 mb-3 ">
                <div class="link text-center ">
                    <a type="button" href="{{ route('leucemias') }}">
                        <img src="{{ asset('img/globulos.png') }}" class=" mb-2" alt=""> <br>
                        Leucemias
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

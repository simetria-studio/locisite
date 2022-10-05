@extends('main.main')

@section('content')
    <div class="container  ">
        <div class="text-center mb-5">
            <h2>Sorologia</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2   mb-3">
                <div class="link text-center">
                    <a href="{{ url('aie') }}">
                        <img src="{{ asset('img/aie.png') }}" class="img-fluid mb-2" alt=""><br>
                        AIE
                    </a>
                </div>
            </div>
            <div class="col-md-2  mb-3">
                <div class="link text-center">
                    <a href="{{ url('mormo') }}">
                        <img src="{{ asset('img/mormo.png') }}" class="mb-2" alt=""> <br>
                        Mormo
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

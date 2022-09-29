@extends('main.main')

@section('content')
    <div class="container   ">
        <div class="text-center mb-5"><h4>Sorologia</h4></div>
        <div class="d-flex justify-content-evenly">
            <div class="mb-3">
                <div class="card card1 text-center">
                    <a class="emoji" href="{{ url('aie') }}">
                        <img src="{{ asset('img/aie.png') }}" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>AIE</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-3">
                <div class="card card1 text-center">
                    <a class="emoji" href="{{ url('mormo') }}">
                        <img src="{{ asset('img/mormo.png') }}" alt="">

                        <div class="card-body">
                            <div class="card-title ">
                                <h5>Mormo</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
@endsection

@extends('main.main')
@section('title', 'Contato | ')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="text-center mb-3">
                <h4>Duvidas ou Sugestões? <br> Contate-nos!</h4>
            </div>
            <div>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nome completo">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <textarea placeholder="Sua Mensagem" id="my-textarea" class="form-control" name=""
                                rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-3">
                <h4>Nossa localização</h4>
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3757.5828115438508!2d-43.90791608564037!3d-19.645125734585704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa67cf62c431e4b%3A0xc6ee5eda6b81daad!2sR.%20Cel.%20Duraes%2C%20170%20-%20Lagoa%20Santa%2C%20MG%2C%2033400-000!5e0!3m2!1sen!2sbr!4v1663697162173!5m2!1sen!2sbr"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection

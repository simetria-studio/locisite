@extends('main.main')

@section('title', 'Formulários | ')

@section('content')
    <div class="container">
        <h1 class="text-center text-primary">Formulários</h1>
        <div class="documentos slide-in-left ">
            <div class="exame1  exames card">
                <div class="card-body">
                    <h5>Solicitação de Exame de Genotipagem Animal</h5>
                </div>
                <div class="card-footer">
                    <a href="https://4a4c1db8-3175-43c2-933e-2563969564b1.filesusr.com/ugd/8a64e2_6c24d65e55a2481eb1a1d1fa2a7fa862.xlsx?dn=FOR.ATN.08%20v.7%20-%20Ficha%20de%20Solicita%C3%A7%C3%A3o%20de%20Exame%20de%20Genotipagem%20Animal.xlsx"
                        class="btn btn-primary">Baixe aqui</a>
                </div>
            </div>
            {{-- <div class="exame2  exames card">
                <div class="card-body">
                    <h5>Requisição de Exame para Exame Diagnóstico de Mormo</h5>
                </div>
                <div class="card-footer">
                    <a target="_blank" href="{{ url('pdf/requisicao_de_exame_para_diagnostico_de_mormo.pdf') }}"
                        class="btn btn-secondary">Baixe aqui</a>
                </div>
            </div> --}}
            {{-- <div class="exame3  exames card">
                <div class="card-body">
                    <h5>Requisição de Exame para Diagnóstico de Anemia Infecciosa Equina</h5>
                </div>
                <div class="card-footer">
                    <a target="_blank"
                        href="{{ url('pdf/requisicao_de_exame_para_diagnostico_anemia_infecciosa_equina.pdf') }}"
                        class="btn btn-secondary">Baixe aqui</a>
                </div>
            </div> --}}

            <div class="exame2  exames card">
                <div class="card-body">
                    <h5>Requisição de Teste de Homozigose Tobiana</h5>
                </div>
                <div class="card-footer">
                    <a href="https://4a4c1db8-3175-43c2-933e-2563969564b1.filesusr.com/ugd/8a64e2_4e381c6227aa464581a5d6b45a3d0e57.xlsx?dn=FOR.ATN.17%20v.4%20-%20Requisi%C3%A7%C3%A3o%20de%20Exame%20de%20Homozigose%20Tobiana.xlsx"
                        class="btn btn-primary">Baixe aqui</a>
                </div>
            </div>
            <div class="exame3  exames card">
                <div class="card-body">
                    <h5>Requisição de Exame de Beta Caseína</h5>
                </div>
                <div class="card-footer">
                    <a href="https://4a4c1db8-3175-43c2-933e-2563969564b1.filesusr.com/ugd/8a64e2_8dc7862be4b54d68a794532956cc6ccb.xlsx?dn=FOR.ATN.19%20v.2%20-%20Requisi%C3%A7%C3%A3o%20de%20Exame%20de%20Beta%20Case%C3%ADna.xlsx"
                        class="btn btn-primary">Baixe aqui</a>
                </div>
            </div>
            <div class="exame4  exames1 card">
                <div class="card-body">
                    <h5>Diagnóstico Molecular de Leucemias</h5>
                </div>
                <div class="card-footer">
                    <a target="_blank" href="{{ url('img/oncohematologia.pdf') }}" download="FOR.ATN.15 v.4 - Ficha de Solicitação de Exames Moleculares de Oncohematologia.pdf" class="btn btn-secondary">Baixe
                        aqui</a>
                </div>
            </div>
        </div>
    </div>
@endsection

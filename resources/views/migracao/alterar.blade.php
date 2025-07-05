@extends('layouts.default')
@section('page-title', 'Alterar Migração')
@section('content')

<form action="{{ route('migracao.update', $migracao->idmigracao)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="col-md-6">

            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" name="cliente" class="form-control" id="cliente" value="{{$migracao->cliente}}">
            </div>
            <div class="mb-3">
                <label for="data_inicio_migracao" class="form-label">Data Inicio Migração</label>
                <input type="text" name="data_inicio_migracao" class="form-control" id="data_inicio_migracao" data-provide="datepicker" value="{{$migracao->data_inicio_migracao}}">
            </div>
            <div class="mb-3">
                <label for="data_fim_migracao" class="form-label">Data Fim Migração</label>
                <input type="text" name="data_fim_migracao" class="form-control" id="data_fim_migracao" data-provide="datepicker" value="{{$migracao->data_fim_migracao}}">
            </div>
            <div class="mb-3">
                <label for="data_inicio_implantacao" class="form-label">Data Inicio Implantação</label>
                <input type="text" name="data_inicio_implantacao" class="form-control" id="data_inicio_implantacao" data-provide="datepicker" value="{{$migracao->data_inicio_implantacao}}">
            </div>

            <div class="mb-3">
                <label for="data_fim_implantacao" class="form-label">Data Fim Implantação</label>
                <input type="text" name="data_fim_implantacao" class="form-control" id="data_fim_implantacao" data-provide="datepicker" value="{{$migracao->data_fim_implantacao}}">
            </div>
            <div class="mb-3">
                <label for="coordenador_projeto" class="form-label">Coordenador do Projeto</label>
                <input type="text" name="coordenador_projeto" class="form-control" id="coordenador_projeto"  value="{{$migracao->coordenador_projeto}}">
            </div>

            <button type="submit" class="btn btn-primary">Confirmar</button>
            <a href="{{ route('migracao') }}" class="btn btn-success">Voltar</a>

    </div>  
</form>
</div>

@endsection
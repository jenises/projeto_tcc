@extends('layouts.default')
@section('page-title', 'Migrações')
@section("page-actions")
    <a href="{{ route('migracao.novo') }}" class="btn btn-success">Adicionar Nova Migração</a>
@endsection
@section('content')

    @session('status')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"><p class="text-info">Código</p></th>
            <th scope="col"><p class="text-info">Cliente </p></th>
            <th scope="col"><p class="text-info">Data Inicio Migração</p></th>
            <th scope="col"><p class="text-info">Data Fim Migração</p></th>
            <th scope="col"><p class="text-info">Data Inicio Implantação</p></th>
            <th scope="col"><p class="text-info">Data Fim Implantação</p></th>
            <th scope="col"><p class="text-info">Coordenador do Projeto</p></th>
            <th scope="col"><p class="text-info">Ações</p></th>

        </tr>
    </thead>
    <tbody>
        @foreach ($migracoes as $migracao)

        <tr>
            <th scope="row">{{ $migracao->idmigracao }}</th>
            <td>{{ $migracao->cliente}}</td>
            <td>{{  date('d/m/Y', strtotime($migracao->data_inicio_migracao)) }}</td>
            <td>{{ date('d/m/Y', strtotime($migracao->data_fim_migracao))   }}</td>
            <td>{{ date('d/m/Y', strtotime($migracao->data_inicio_implantacao)) }}</td>
            <td>{{ date('d/m/Y', strtotime($migracao->data_fim_implantacao)) }}</td>
            <td>{{ $migracao->coordenador_projeto }}</td>
            <td>
                <a href="{{ route('migracao.update', $migracao->idmigracao)}}" class="btn btn-primary btn-sm">Editar</a>
                <a href="#" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
        @endforeach
  </tbody>
  </table>

@endsection
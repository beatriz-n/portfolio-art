@extends('layouts.main')

@section('title', 'Materiais')

@section('content')
<main>
    <br>
    <div class="container-fluid">
        @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="row">
            <!-- Conteúdo principal -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="d-flex justify-content-start">
                            <a href="materialnovo"><i class="fa fa-plus-circle fa-2x text-primary" aria-hidden="true"></i></a>
                            <span class="ms-2">Adicionar Novo Material</span>
                        </div>
                    </div>
                </div>

                <!-- Exemplo de DataTable em um card -->
                <div class="card mb-4">
                    <div class="card-header" id="portfolio-table">
                        <i class="fas fa-table me-1"></i>
                        Listar Materiais
                    </div>
                    <div class="card-body">
                        @if($materiais)
                        <table id="datatablesSimple" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($materiais as $material)
                                <tr>
                                    <td>{{ $material['tituloMaterial'] }}</td>
                                    <td>
                                        <a href="/events/materialeditar/{{$material['idMaterial']}}" class="btn btn-sm btn-primary" title="Editar"><i class="fas fa-edit"></i></a>
                                        <a href="/material/delete/{{$material['idMaterial']}}" class="btn btn-sm btn-danger" title="Excluir"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <span style="font-size: 2em;">Nenhum material encontrado!</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layouts.main')

@section('title', 'Novo Portfólio')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Nova Arte</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/admin">Portfólio</a></li>
            <li class="breadcrumb-item active">Nova Arte</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tituloArte">Título</label>
                                <input required type="text" class="form-control" id="tituloArte" name="tituloArte" aria-describedby="emailHelp" placeholder="Título da Arte">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valorArte">Valor</label>
                                <input required type="text" class="form-control" id="valorArte" name="valorArte" placeholder="Valor da Arte">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="statusArte">Status</label>
                                <select id="statusArte" name="statusArte" class="form-control">
                                    <option value="1" selected>Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipoArte">Tipo</label>
                                <select id="tipoArte" name="tipoArte" class="form-control" onchange="materialInfo()" required>
                                    <option value="1" selected>Digital</option>
                                    <option value="2">Tradicional</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="imagemArte" class="form-label">Imagem da Arte</label>
                            <input class="form-control" type="file" id="imagemArte" name="imagemArte" name="image" required>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="emolduradoArte" name="emolduradoArte" value="1">
                                        <label class="form-check-label" for="emolduradoArte">
                                            Está Emoldurado?
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="envernizadoArte" name="envernizadoArte" value="1">
                                        <label class="form-check-label" for="envernizadoArte">
                                            Está Envernizado?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <div class="listarMaterial" style="display: none;">
                            <div class="card mb-4">
                                <div class="card-header" id="portfolio-table">
                                    <i class="fas fa-table me-1"></i>
                                    Escolha o Material
                                </div>

                                <div class="card-body">
                                    @if($materiais)
                                    <table id="datatablesSimple" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Título</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($materiais as $material)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="material{{$material['idMaterial']}}" name="materiais[]" value="{{$material['idMaterial']}}">
                                                    </div>
                                                </td>
                                                <td>{{ $material['tituloMaterial'] }}</td>
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
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
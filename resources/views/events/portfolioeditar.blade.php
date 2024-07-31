@extends('layouts.main')

@section('title', 'Novo Portfólio')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Editar Arte</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/admin">Portfólio</a></li>
            <li class="breadcrumb-item active">Editar Arte</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="/arte/update/{{$arte->idArte}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tituloArte">Título</label>
                                <input type="text" class="form-control" value="{{$arte->tituloArte}}" id="tituloArte" name="tituloArte" aria-describedby="emailHelp" placeholder="Título da Arte">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valorArte">Valor</label>
                                <input type="text" class="form-control" value="{{$arte->valorArte}}" id="valorArte" name="valorArte" placeholder="Valor da Arte">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="statusArte">Status</label>
                                <select id="statusArte" name="statusArte" class="form-control">
                                    <option value='1' {{ $arte->statusArte == 1 ? 'selected' : '' }}>Ativo</option>
                                    <option value='0' {{ $arte->statusArte == 0 ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipoArte">Tipo</label>
                                <select id="tipoArte" name="tipoArte" class="form-control" onchange="materialInfo()" required>
                                    <option value="1" {{ count($artesMateriais) ? '' : 'selected' }}>Digital</option>
                                    <option value="2" {{ count($artesMateriais) ? 'selected' : '' }}>Tradicional</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-10">
                            <label for="imagemArte" class="form-label">Imagem da Arte</label>
                            <input class="form-control" type="file" id="imagemArte" name="imagemArte" name="image">
                        </div>
                        <div class="form-group col-md-2">
                        <img width="100px" src="/img/artes/{{ $arte['imagemArte'] }}" class="img-fluid" alt="{{ $arte['tituloArte'] }}">
                        </div>
                        </div>
                        <br>
                        <div class="listarMaterial" {{ count($artesMateriais) ? 'style=display:block;' : 'style=display:none;' }}>
                        <fieldset class="form-group">
                            <div class="row">
                                <!-- <legend class="col-form-label col-sm-2 pt-0">Radios</legend> -->
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" {{ $arte->emolduradoArte ? 'checked' : '' }} type="checkbox" id="emolduradoArte" name="emolduradoArte" value="1">
                                        <label class="form-check-label" for="emolduradoArte">
                                            Está Emoldurado?
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" {{ $arte->envernizadoArte ? 'checked' : '' }} type="checkbox" id="envernizadoArte" name="envernizadoArte" value="1">
                                        <label class="form-check-label" for="envernizadoArte">
                                            Está Envernizado?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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
                                                        <input class="form-check-input" type="checkbox" id="material{{$material['idMaterial']}}" name="materiais[]" value="{{$material['idMaterial']}}" {{in_array($material['idMaterial'], array_column($artesMateriais, 'idMaterial')) ? 'checked' : ''}}>
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
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
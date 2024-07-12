@extends('layouts.main')

@section('title', 'Novo Portfólio')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Editar Arte</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="admin">Portfório</a></li>
            <li class="breadcrumb-item active">Editar Arte</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tituloArte">Título</label>
                                <input type="text" class="form-control" id="tituloArte" name="tituloArte" aria-describedby="emailHelp" placeholder="Título da Arte">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valorArte">Valor</label>
                                <input type="text" class="form-control" id="valorArte" name="valorArte" placeholder="Valor da Arte">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="statusArte">Status</label>
                                <select id="statusArte" name="statusArte" class="form-control">
                                    <option selected>Ativo</option>
                                    <option>Inativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="imagemArte" class="form-label">Imagem da Arte</label>
                            <input class="form-control" type="file" id="imagemArte" name="imagemArte" name="image">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <!-- <legend class="col-form-label col-sm-2 pt-0">Radios</legend> -->
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="emolduradoArte" name="emolduradoArte" value="1" checked>
                                        <label class="form-check-label" for="emolduradoArte">
                                            Está Emoldurado?
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="envernizadoArte" name="envernizadoArte" value="2">
                                        <label class="form-check-label" for="envernizadoArte">
                                            Está Envernizado?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Editar</button>
            </div>
            </form>
        </div>
    </div>
</main>
@endsection
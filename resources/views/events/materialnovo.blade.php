@extends('layouts.main')

@section('title', 'Novo Portfólio')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Novo Material</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/material">Material</a></li>
            <li class="breadcrumb-item active">Novo Material</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="/insertMaterial" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="tituloMaterial">Título</label>
                                <input type="text" class="form-control" id="tituloMaterial" name="tituloMaterial" aria-describedby="emailHelp" placeholder="Título do Material">
                            </div>
                        </div>
                        </fieldset>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <!-- <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Primary Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Success Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Botão de adição personalizado no lado esquerdo -->
                <div class="col-md-12 mb-3">
                    <div class="d-flex justify-content-start">

                        <a href="portfolionovo"><i class="fa fa-plus-circle fa-2x text-primary" aria-hidden="true"></i></a>
                        <span class="ms-2">Adicionar Nova Arte</span>
                    </div>
                </div>
            </div>
            
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
            <!-- Exemplo de DataTable em um card -->
            <div class="card mb-4">
                <div class="card-header" id="portfolio-table">
                    <i class="fas fa-table me-1"></i>
                    Listar Portfólio
                </div>
                <div class="card-body">
                    @if($artes)

                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Data Envio</th>
                                <th>Título</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artes as $arte)
                            <tr>
                                <td>{{ date('d/m/Y',strtotime($arte['envioArte'])) }}</td>
                                <td>{{ $arte['tituloArte'] }}</td>
                                <td>{{ 'R$' . number_format($arte['valorArte'], 2, ',', '.') }}</td>
                                <td>@if ($arte['statusArte'] == 1)
                                    <span class="badge badge-success">Ativo</span>
                                    @else
                                    <span class="badge badge-danger">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="portfolioeditar" class="btn btn-sm btn-primary" title="Editar"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger" title="Excluir"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <span style="font-size: 2em;">Nenhuma arte encontrada!</span>
                    @endif
                </div>
            </div>
        </div>

</main>

@endsection
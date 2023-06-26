@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                <h1>Software Open Source para Pymes</h1>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-8">
                <div class="input-group mb-3">
                    <input class="form-control form-control-lg" type="text" placeholder="Buscar" aria-label=".form-control-lg example">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                </div>
            </div>
            <div class="col-4">
                <div class="dropdown float-end">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordena por:
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Más popular</a></li>
                        <li><a class="dropdown-item" href="#">Nuevas versiones</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row mt-4">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sistema operativo</h5>
                        <ul>
                            @foreach($operativeSystems as $operativeSystem)
                                <li>{{ $operativeSystem->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Categoria</h5>
                        <ul>
                            @foreach($categories as $category)
                                <li>{{ $category->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">

                        @foreach($applications as $application)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                                        <img src="{{ $application->image }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $application->name }}</h5>
                                            <p class="card-text">{{ $application->description }}</p>
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            <div class="float-end mb-4">
                                                <a href="#" class="btn btn-primary">Descargar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

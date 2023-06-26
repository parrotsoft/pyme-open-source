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
                            <li>Windows</li>
                            <li>Linux</li>
                            <li>Android</li>
                            <li>IOS</li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Categoria</h5>
                        <ul>
                            <li>Ofimática</li>
                            <li>Negocios</li>
                            <li>Educacación</li>
                            <li>Multimedia</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">

                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 d-flex justify-content-center align-items-center">
                                    <img src="https://a.fsdn.com/con/app/nel_img/11941" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">LibreOffice</h5>
                                        <p class="card-text">LibreOffice es una suite ofimática gratuita y potente. Procesador de textos, hojas de cálculo, presentaciones, diagramas, bases de datos, editores de fórmulas, gráficos y más. Compatible con Windows, Mac y Linux.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="float-end mb-4">
                                            <a href="#" class="btn btn-primary">Descargar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-2 d-flex justify-content-center align-items-center">
                                    <img src="https://a.fsdn.com/allura/mirror/openofficeorg/icon?1675777998?&w=120" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Apache OpenOffice</h5>
                                        <p class="card-text">Alternativa gratuita para las herramientas de productividad de Office: Apache OpenOffice, anteriormente conocido como OpenOffice.org, es un paquete de software de productividad de oficina de código abierto que contiene procesadores de texto, hojas de cálculo, presentaciones, gráficos.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        <div class="float-end mb-4">
                                            <a href="#" class="btn btn-primary">Descargar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

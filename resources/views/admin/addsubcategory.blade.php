@extends('admin.layouts.template')
@section('page_title')
Añadir Sub Categoria - Tienda 
@endsection

@section('content')
    <!-- Basic Layout-->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pagina /</span> Añadir Sub Categoria</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Añadir nueva Sub Categoria </h5>
                    <small class="text-muted float-end">Ingresa la información</small>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre de la Sub Categoria </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" placeholder="Bebidas" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Selecionar Categoria </label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category" name="category" aria-label="Default select example">
                                    <option selected>Seleciona la  Categoria</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Añadir Sub Categoria</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

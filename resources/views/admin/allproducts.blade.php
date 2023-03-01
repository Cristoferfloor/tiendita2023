@extends('admin.layouts.template')
@section('page_title')
Todos los Productos - Tienda 
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pagina /</span> Todos los Productos</h4>
        <div class="card">
            <h5 class="card-header">Todas los Productos Disponibles</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Producto</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                           <td>1</td>
                           <td>Aguas</td>
                           <td></td>
                           <td>100</td>
                           <td>
                            <a href="" class="btn btn-primary">Editar </a>
                            <a href="" class="btn btn-warning"> Borrar </a>
                           </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

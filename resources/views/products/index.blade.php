@extends('layouts.app')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tañano</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="">
                    <td>{{$product->name}}</td>
                    <td>{{$product->size}}</td>
                    <td>${{$product->price}}.000</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>    
@endsection
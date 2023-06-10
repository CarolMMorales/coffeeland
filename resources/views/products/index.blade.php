@extends('layouts.app')
@section('content')
<div class="container">
    @if (Auth::user()->name=="admin")
    <div class="row container col-sm-3">
        <a name="" id="" class="btn btn-outline-success float-center mb-3" href="{{route('products.create')}}" role="button">Crear Producto</a>
    </div>
    @else
    <div class="row container col-sm-3">
        <a name="" id="" class="btn btn-outline-secondary float-center mb-3" href="{{route('orders.create')}}" role="button">Ordenar</a>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tamaño</th>
                    <th scope="col">Precio</th>
                    @if (Auth::user()->name=="admin")
                    <th scope="col">Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="">
                    <td>{{$product->name}}</td>
                    <td>{{$product->size}}</td>
                    <td>${{$product->price}}.000</td>
                    @if (Auth::user()->name=="admin")
                    <td>
                        <div class="btn-group mx-2" role="group" aria-label="">
                            <a name="" id="" class="btn btn-outline-secondary" href="{{route('products.show', $product->id)}}" role="button">Detalles</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                    @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                            </form>
                        </div>
                    </td>
                    @endif

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection

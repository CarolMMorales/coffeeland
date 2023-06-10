@extends('layouts.app')
@section('content')
<div class="container">
    @if (Auth::user()->name=="admin")
    <div class="row container col-sm-3">
        <a name="" id="" class="btn btn-success float-end" href="{{route('products.create')}}" role="button">Crear Producto</a>
    </div>
    @else
    <div class="row container col-sm-3">
        <a name="" id="" class="btn btn-success float-end" href="{{route('orders.create')}}" role="button">Crear Orden</a>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-dark">
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
                        <div class="btn-group" role="group" aria-label="">
                            <a name="" id="" class="btn btn-primary" href="{{route('products.show', $product->id)}}" role="button">Detalles</a>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                    @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar">
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
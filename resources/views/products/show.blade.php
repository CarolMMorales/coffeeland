@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card text-dark bg-light">
          <div class="card-body">
            <h4 class="card-title"><{{$product->name}}</h4>
            <p class="card-text">Tamaño: {{$product->size}}</p>
            <p class="card-text">Precio: ${{$product->price}}.000</p>
            <div class="btn-group mx-3 justify-content-around" role="group" aria-label="">
                <a name="" id="" class="btn btn-outline-secondary me-3" href="{{route('products.edit', $product->id)}}" role="button">Editar</a>
                <form action="{{route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                <input type="submit" class="btn btn-outline-danger" value="Eliminar">
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection

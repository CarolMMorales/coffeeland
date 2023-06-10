@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card text-white bg-light">
          <div class="card-body text-dark">
            <h4 class="card-title ">Creacion de productos</h4>
            <form action="{{route('products.update', $product->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Nombre:</label>
                  <input type="name" class="form-control" id="name" value="{{$product->name}}" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tamaño:</label>
                    <select class="form-select form-select-lg"  name="size" id="">
                        <option value="{{$product->size}}" selected>Seleccione tañamo</option>
                        <option value="s">s</option>
                        <option value="m">m</option>
                        <option value="l">l</option>
                        <option value="xl">xl</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-text">$ </span>
                    <input type="number" class="form-control" value="{{$product->price}}" name="price">
                    <span class="input-group-text">.000</span>
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Crear</button>
              </form>
        
          </div>
        </div>
       </div>
@endsection
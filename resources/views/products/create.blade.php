@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">Creacion de productos</h2>
        <div class="card text-dark bg-light">
          <div class="card-body text-dark">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Nombre:</label>
                  <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tamaño:</label>
                    <select class="form-select form-select-lg" name="size" id="">
                        <option value="null" selected>Seleccione tamaño</option>
                        <option value="s">s</option>
                        <option value="m">m</option>
                        <option value="l">l</option>
                        <option value="xl">xl</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-text">$ </span>
                    <input type="number" class="form-control" name="price">
                    <span class="input-group-text">.000</span>
                  </div>
                <button type="submit" class="btn btn-outline-success mt-3">Crear</button>
              </form>

          </div>
        </div>
       </div>
@endsection

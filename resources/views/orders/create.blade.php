@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card text-white bg-light">
          <div class="card-body text-dark">
            <h4 class="card-title ">Creacion de Orden</h4>
            <form action="{{route('orders.store')}}" method="POST">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Producto:</label>
                    <select class="form-select form-select-lg" name="id_product" id="">
                        <option value="null" selected>Seleccione producto</option>
                        @foreach ($products as $product)
                        <option value="{{$product->id}}" selected>{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Mesa:</label>
                    <input type="number" class="form-control" id="" name="table">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="" class="form-label">Cantidad:</label>
                    <input type="number" class="form-control" id="" name="amount">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="" class="form-label">Metodo de Pago:</label>
                    <input type="text" class="form-control" id="" name="payment_method">
                  </div>
                <button type="submit" class="btn btn-primary mt-3">Crear</button>
              </form>
        
          </div>
        </div>
       </div>
@endsection
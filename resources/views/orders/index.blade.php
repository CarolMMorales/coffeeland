@extends('layouts.app')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Orden</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Productos</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Metodo de pago</th>
                    <th scope="col">Accion</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr class="">
                    <td>#{{$order->id}}</td>
                    <td>{{$order->users->name}}</td>
                    <td>{{$order->products->name}}</td>
                    <td>{{$order->table}}</td>
                    <td>{{$order->amount}}</td>
                    <td>$ {{$order->price}}.000</td>
                    <td>{{$order->payment_method}}</td>
                    <td>
                        <form action="{{route('orders.destroy', $order->id)}}" method="post">
                            @csrf
                @method('DELETE')
                        <input type="submit" class="btn btn-outline-success" value="Hecho">
                        </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

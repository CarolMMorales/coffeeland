@extends('layouts.app')
@section('content')
      <section class="container4 container-fluid" id="sectionOurCoffees">
        <div class="btn-group-vertical">
          <a href="#sectionOurCoffees" class="btn btn-light active" aria-current="page">Our coffees</a>
          <a href="#sectionPrices" class="btn btn-light">Prices</a>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../assets/img/macchiato.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Caramel macchiato</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../assets/img/mocaccino.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Mocaccino</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../assets/img/expresso.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Expresso</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../assets/img/latte.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Vanilla latte</p>
          </div>
        </div>
      </section><hr>
      <section class="container5 container-fluid" id="sectionPrices">
        <article class="article justify-content-center" id="prices"><h3 id="pricesText">Prices</h3>
          <table class="table table-hover table-sm justify-content-center">
            <thead>
              <tr>
                <th scope="col">Size</th>
                <th scope="col">COP</th>
                <th scope="col">USD</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">Small</th>
                <td>$6.500</td>
                <td>$1.45</td>
              </tr>
              <tr>
                <th scope="row">Medium</th>
                <td>$7.500</td>
                <td>$1.68</td>
              </tr>
              <tr>
                <th scope="row">Large</th>
                <td>$9.000</td>
                <td>$2.01</td>
              </tr>
            </tbody>
          </table>
      </article>
      </section>
@endsection


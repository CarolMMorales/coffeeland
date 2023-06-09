@extends('layouts.app')
@section('content')

        <section class="container6 container-fluid" id="booking">
          <article id="articleForms">
            <h3>Celebrate your special occasions with us!</h3><h4>You just have to fill in the following forms.</h4>
          </article>
          <form class="form">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" value="" placeholder="Enter your name" minlength="3" maxlenght="50" pattern="[a-zA-Z]{3-20}" title="You can only enter letters." autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address" required aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="age" class="form-label">Age</label>
              <input type="number" class="form-control" id="exampleInputAge" placeholder="Enter your age" min="1" max="99" id="age" required aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="month" class="form-label">Choose a date</label>
              <input type="month" class="form-control" id="exampleInputMonth" placeholder="Enter your email address" required aria-describedby="emailHelp">
            </div>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Options</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose a table</option>
                <option value="1">Table 1</option>
                <option value="2">Table 2</option>
                <option value="3">Table 3</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Any other comment?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1" aria-required="true">Do you accept our terms and policies?</label>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </section>
@endsection

@extends('layouts.index')

@section('title', 'Product')

@section('content')

<!-- <h1>Listado de Productos</h1> -->

<!-- Esto sirve para ejecutar lo que le controlador esta mandando y colocar en un arreglo todos los registros -->
<!-- ($trainers as $trainer) Con esto dice que cada trainers que encuentre le ponga trainer -->

<div class="row">
     @foreach($products as $product)
      <div class="col-sm">
<!-- Con esto accedemos a la Variable y al id y el nombre del registro -->

<div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">Product: {{$product->product}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Price:{{$product->price}}</a>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
       </div>
      @endforeach
<!--  -->
</div>

<!-- Aqui abajo se coloca un card de bootstrap para colocar el registro -->


@endsection
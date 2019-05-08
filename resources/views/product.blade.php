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

<div class="card text-center" style="width: 18rem; margin-top:50px;">
  <img src="images/{{$product->img}}" class="card-img-top mx-auto d-block" alt="" height="250px">
  <div class="card-body">
    <h5 class="card-title">{{$product->product}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <a href="#" class="btn btn-primary">Price:{{$product->price}}</a>
    <a href="/product/{{$product->slug}}" class="btn btn-primary">Ver más</a>
  </div>
</div>
       </div>
      @endforeach
<!--  -->
</div>

<!-- Aqui abajo se coloca un card de bootstrap para colocar el registro -->


@endsection
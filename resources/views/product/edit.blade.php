@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
         .btn-primary{
             display:flex;
             justify-content: center;
             text-align: center;
         }
       
        </style>
    </head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Formulary</div>

                <div class="card-body">
                    @if (session('status'))

                  
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div> 
               
                    @endif


<form method="POST" action="/product/{{$product->slug}}" enctype="multipart/form-data">      
 {{-- Es necesario para actualizar una información --}}
 @method('PUT') 

    <!-- Importante para todo formulario  {{ csrf_field() }}   -->
@csrf  

    <div class="form-group row">
        <label  class="col-md-4 col-form-label text-md-right">Product:</label>

        <div class="col-md-6">
            <input type="text" value="{{$product->product}}" class="form-control" name="product" autofocus>

        </div>
    </div>  

    <div class="form-group row">
        <label  class="col-md-4 col-form-label text-md-right">Price:</label>

        <div class="col-md-6">
            <input type="text" value="{{$product->price}}" class="form-control" name="price" autofocus>

        </div>
    </div>  

    <div class="form-group">
        <label for="">Descripción</label>
        <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
        <input type="text" value="{{$product->description}}" name="description" class="form-control">
        </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">Imagen</label>

        <div class="col-md-6">
            <input type="file" value="/images/{{$product->img}}" class="form-control" name="img"  onchange="encodeImageFileAsURL(this)">

        </div>
        <div class="text-center mx-auto d-block">
        <h5 style="margin-top:20px" >Imagen actual</h5>
        <img src="/images/{{$product->img}}" class="" alt="" height="250px" id="change_img" >
        </div>
    </div> 

        <div class="offset-md-6"> 
        <button type="submit" class="btn btn-primary">
        Editar       
        </button>
        </div>
                </form> 
                </div>
               
            </div>
        </div>
    </div>

    
</div>

 {{-- Esto es base64 sirve para cambiar la imagen al momento que le doy click a otra es muy cool --}}
 <script>
    function encodeImageFileAsURL(element) {
      var file = element.files[0];
      var reader = new FileReader();
      reader.onloadend = function() {
        console.log('RESULT', reader.result)
        document.getElementById('change_img').src = reader.result;
      }
      reader.readAsDataURL(file);
    }
    </script>
@endsection
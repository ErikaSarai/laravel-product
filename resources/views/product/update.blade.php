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
                <div class="card-header">Cool</div>

                <div class="card-body">
                    @if (session('status'))

                  
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                      </div> 
               
                    @endif  
<h1> Su actualización se ha hecho con éxito</h1>

<div class="text-center mt-50"  style="margin-top:50px;">
    <a href="{{ url('product') }}" class="btn btn-primary">Ver lista de productos</a>
    </div>

                </div>
               
            </div>
        </div>
    </div>

    
</div>
@endsection
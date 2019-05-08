@extends('layouts.index')


@section('title', 'Product')

@section('content')


<div class="text-center" style="margin-top:30px">
<img src="/images/{{$product->img}}" class="mx-auto d-block" alt="" height="250px">



    <h4>{{$product->product}}</h4>
    <p>{{$product->description}}</p>
    <p>{{$product->price}} $</p>
    <a href="/product/{{$product->slug}}/edit" class="btn btn-primary">Editar</a>


</div>


@endsection
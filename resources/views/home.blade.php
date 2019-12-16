@extends('main')
<!-- @section('customcss')
  <link rel="stylesheet" href="css/app.css">
@endsection -->
@section('content')

{{-- <h1 class='titulo'>Tienda de artesanías</h1>

<h2 class='subtitulo'>Listado de productos</h2> --}}
<br>
<nav class="navbar navbar-light bg-light" id="barrabusqueda">
  <form class="form-inline" action='/productoencontrado' method='get'>

    <input class="form-control mr-sm-2" type="search" placeholder="Ejemplo de producto..." aria-label="Search" name="busqueda">
    <button class="btn btn-primary" type="submit">Buscar</button>
  </form>
</nav>
<div class="container" id="productohome">

  <br>

    @forelse ($products as $product)
      <article class='producto'>
        <img class='imagen 'src="/storage/product/{{$product->featured_img}}" alt="" id="imgproducto">
        <h4 class="name">{{$product->name}}</h4>
        <p class="description">{{$product->description}}</p>
        <p class="price">Precio: {{$product->price}}$</p>
        <form class="" action="/addtocarrito" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-success">Agregar al carrito</a>
        </form>
        <form class="" action="/verProducto" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
          <button type="submit" class="btn btn-warning">Ver Mas</a>
        </form>
        <!-- <a href="verProducto" class="btn btn-success">Ver Mas</a> -->
      </article>

    @empty
      <p>No hay productos disponibles</p>
    @endforelse



</div>
@endsection

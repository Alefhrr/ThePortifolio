@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
<!--navbar dashboard bootstrap 4.6--->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Servece
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Adicionar</a>
          <a class="dropdown-item" href="#">Listar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Portifolio
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Adicionar</a>
          <a class="dropdown-item" href="#">Listar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Testemunials
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Adicionar</a>
          <a class="dropdown-item" href="#">Listar</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Signature
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Adicionar</a>
          <a class="dropdown-item" href="#">Listar</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--fim do navbar---->




















@endsection
@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')
<x-dashboard.navbar/>
@php 
    $x = "list";
@endphp

@if ($x == "teste")
<p>Rodou</p>
@elseif ($x == "list")
<x-dashboard.liste/>
@else
@endif
@if(isset($msg))
<div class="alert alert-success" role=""alert>
    {{$msg}}
</div>
@else

@endif

<x-dashboard.about-modal/>
<x-dashboard.servece-modal/>
<x-dashboard.portfolio-modal/>
<x-dashboard.Testemunials-modal/>
<x-dashboard.signature-modal/>







@endsection
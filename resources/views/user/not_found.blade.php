@extends('layouts.app')

@section('content')


<div class="jumbotron mt-5 mr-5 ml-5 " style="height: 250px;">
    <div class="container d-flex justify-content-center">
        <h1 style="display: block; position:absolute;">Usuario no encontrado :(</h1>
        <h3 class="text text-info m-5" style="display: block; position:absolute;">Prueba con otra dirección</h3>
        
    </div>
    <div class="container">
        <a class="btn btn-info" style="width:100px; position: absolute; bottom: 450px; left: 800px; " href="{{route('home')}}"><img src="https://www.flaticon.com/svg/vstatic/svg/1946/1946488.svg?token=exp=1612640978~hmac=c4f7ccc974963b28eca4651f8f89ab62" height="30"/> Inicio</a>
    </div>
    
</div>



@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear un nuevo enlace</h1>
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><img src="https://www.flaticon.com/svg/vstatic/svg/130/130882.svg?token=exp=1612501804~hmac=ba4b4e8dcfd049fa6458d91f40f7d4bf" height="20"> Volver</a>
    <form action="{{ route('links.store') }}" method="post">
        @csrf
        @include('links.sub_form')
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
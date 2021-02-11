@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear un nuevo enlace</h1>
    @include('layouts.sub_form-errors')
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><img src="https://www.flaticon.com/svg/vstatic/svg/860/860790.svg?token=exp=1613078449~hmac=75e60a82e248d1a9c1cf7d259eaf1ab7" height="20"> Volver</a>
    <form action="{{ route('links.store') }}" method="post">
        @csrf
        @include('links.sub_form')
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
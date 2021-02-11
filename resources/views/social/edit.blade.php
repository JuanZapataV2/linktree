@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar una red social enlace</h1>
    @include('layouts.sub_form-errors')
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><img src="https://www.flaticon.com/svg/vstatic/svg/860/860790.svg?token=exp=1613078657~hmac=129c323524be2b649c680f9c77e55688" height="20"> Volver</a>
    <form action="{{ route('social.update', $social->id) }}" method="post">
        @csrf
        @method('put')
        @include('social.sub_form')
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ver enlace</h1>
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><img src="https://www.flaticon.com/svg/vstatic/svg/130/130882.svg?token=exp=1612501804~hmac=ba4b4e8dcfd049fa6458d91f40f7d4bf" height="20"></img> Volver</a>
    <table class="table table-striped table-hover">
        <tr>
            <th scope="col" style="width: 200px">Id</th>
            <td>{{ $link->id }}</td>
        </tr>
        <tr>
            <th scope="col">Etiqueta</th>
            <td>{{ $link->label }}</td>
        </tr>
        <tr>
            <th scope="col">Enlace</th>
            <td>{{ $link->url }}</td>
        </tr>
        <tr>
            <th scope="col">Propietario</th>
            <td>{{ $link->owner->name }}</td>
        </tr>
        <tr>
            <th scope="col">Creado en</th>
            <td>{{ $link->created_at ?? "Desconocida" }}</td>
        </tr>
        <tr>
            <th scope="col">Actualizado en</th>
            <td>{{ $link->updated_at ?? "Desconocida" }}</td>
        </tr>
    </table>
</div>
@endsection 
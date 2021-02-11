@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ver enlace</h1>
    <a type="button" class="btn btn-secondary mb-4 mt-2" href="{{ url()->previous() }}"><img src="https://www.flaticon.com/svg/vstatic/svg/860/860790.svg?token=exp=1613078449~hmac=75e60a82e248d1a9c1cf7d259eaf1ab7" height="20">Volver</a>
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

    <div class="btn-group" role="group" aria-label="Link options">
        <a href="{{ route('links.edit', $link->id) }}" class="btn btn-warning" title="Editar"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjM4MXB0IiB2aWV3Qm94PSIwIC0xIDM4MS41MzQxNyAzODEiIHdpZHRoPSIzODFwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzcwLjU4OTg0NCAyMzAuOTY0ODQ0Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwdjg4Ljc5Mjk2OGMtLjAxOTUzMiAxNi41NTg1OTQtMTMuNDM3NSAyOS45ODA0NjktMzAgMzBoLTI4MC41ODk4NDRjLTE2LjU2MjUtLjAxOTUzMS0yOS45ODA0NjktMTMuNDQxNDA2LTMwLTMwdi0yNjAuNTg5ODQzYy4wMTk1MzEtMTYuNTYyNSAxMy40Mzc1LTI5Ljk4MDQ2OSAzMC0zMGg4OC43ODkwNjJjNS41MjM0MzggMCAxMC00LjQ3NjU2MyAxMC0xMCAwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwaC04OC43ODkwNjJjLTI3LjYwMTU2Mi4wMzEyNS00OS45Njg3NSAyMi4zOTg0MzctNTAgNTB2MjYwLjU4OTg0M2MuMDMxMjUgMjcuNjAxNTYzIDIyLjM5ODQzOCA0OS45Njg3NSA1MCA1MGgyODAuNTg5ODQ0YzI3LjYwMTU2Mi0uMDMxMjUgNDkuOTY4NzUtMjIuMzk4NDM3IDUwLTUwdi04OC43ODkwNjJjMC01LjUyMzQzOC00LjQ3NjU2My0xMC4wMDM5MDYtMTAtMTAuMDAzOTA2em0wIDAiLz48cGF0aCBkPSJtMTU2LjM2NzE4OCAxNzguMzQzNzUgMTQ2LjAxMTcxOC0xNDYuMDE1NjI1IDQ3LjA4OTg0NCA0Ny4wODk4NDQtMTQ2LjAxMTcxOSAxNDYuMDE1NjI1em0wIDAiLz48cGF0aCBkPSJtMTMyLjU0Mjk2OSAyNDkuMjU3ODEyIDUyLjAzOTA2Mi0xNC40MTQwNjItMzcuNjI1LTM3LjYyNXptMCAwIi8+PHBhdGggZD0ibTM2Mi40ODgyODEgNy41NzgxMjVjLTkuNzY5NTMxLTkuNzQ2MDk0LTI1LjU4NTkzNy05Ljc0NjA5NC0zNS4zNTU0NjkgMGwtMTAuNjA1NDY4IDEwLjYwNTQ2OSA0Ny4wODk4NDQgNDcuMDg5ODQ0IDEwLjYwNTQ2OC0xMC42MDU0NjljOS43NS05Ljc2OTUzMSA5Ljc1LTI1LjU4NTkzOCAwLTM1LjM1NTQ2OXptMCAwIi8+PC9zdmc+" height="20"/></a>
        <form action="{{ route('links.destroy', $link->id) }}" method="post"
            onsubmit="return confirm('¿Esta seguro que desea remover el enlace?')">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" title="Remover"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" height="20"></img></button>
        </form>
    </div>
</div>
@endsection 
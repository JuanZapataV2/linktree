@extends ('layouts.app')
<link rel="stylesheet" href="{{ asset('css/app.css')  }}">
@section('content')
    <div class="container">
        <h1>Enlaces</h1>
        <table class="table table-striped table-hover">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Etiqueta</th>
                <th scope="col">Mis enlaces</th>
                <th scope="col"></th>
            </tr>

            @foreach ($links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->label}}</td>
                    <td><a href="{{$link->url}}">{{$link->url}} </a></td>
                    <td>
                        {{-- <form action="{{route('links.destroy', $link->id)}}" method="post"
                            onsubmit="return confirm('Quieres remover el enlace?')">                           
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" height="20"></img></button>
                        </form> --}}
                        <div class="btn-group" role="group" aria-label="Link options">
                            <a href="{{ route('links.show', $link->id) }}" class="btn btn-info"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPgo8cGF0aCBkPSJNMjAuMDA1LDUxMmMtNS4wOTcsMC0xMC4xMTYtMS45NDgtMTMuOTI1LTUuNjQxYy01Ljg0NS01LjY2Ni03LjY3Mi0xNC4zMDktNC42MjEtMjEuODU1bDQ1LjQxMS0xMTIuMzMzICBDMTYuMTYyLDMzMi4yNTMsMCwyODUuNDI1LDAsMjM2YzAtNjMuMzc1LDI2Ljg1NS0xMjIuODU3LDc1LjYyLTE2Ny40ODlDMTIzLjg5MSwyNC4zMzEsMTg3Ljk1MiwwLDI1NiwwICBzMTMyLjEwOSwyNC4zMzEsMTgwLjM4LDY4LjUxMUM0ODUuMTQ1LDExMy4xNDMsNTEyLDE3Mi42MjUsNTEyLDIzNmMwLDQ1LjQ0OC0xNC4wNCw4OS41NzctNDAuNjAyLDEyNy42MTUgIGMtNi4zMjUsOS4wNTctMTguNzkyLDExLjI3MS0yNy44NDksNC45NDdzLTExLjI3MS0xOC43OTItNC45NDctMjcuODQ5QzQ2MC40NTIsMzA5LjQyNSw0NzIsMjczLjIxNSw0NzIsMjM2ICBjMC0xMDguMDc1LTk2Ljg5Ny0xOTYtMjE2LTE5NlM0MCwxMjcuOTI1LDQwLDIzNmMwLDQzLjc4MywxNS41NzcsODUuMiw0NS4wNDYsMTE5Ljc3M2M0LjgzNCw1LjY3MSw2LjExNSwxMy41NjEsMy4zMjEsMjAuNDcgIGwtMzEuMzY2LDc3LjU4OWw5MS4zNDUtNDAuMjY2YzUuMDYzLTIuMjMxLDEwLjgyNi0yLjI2NywxNS45MTYtMC4wOTVDMTkzLjA4Miw0MjUuNzY2LDIyMy45NDYsNDMyLDI1Niw0MzIgIGMzNi44OTIsMCw3My4yOTktOC41ODcsMTA1LjI4Ni0yNC44MzJjOS44NS01LDIxLjg4Ny0xLjA3MiwyNi44ODksOC43NzVjNS4wMDEsOS44NDksMS4wNzMsMjEuODg3LTguNzc1LDI2Ljg4OSAgQzM0MS44MjgsNDYxLjkxNCwyOTkuMTU3LDQ3MiwyNTYsNDcyYy0zNC40OCwwLTY3LjgzNS02LjE5MS05OS4yNzYtMTguNDEzTDI4LjA2OCw1MTAuMzAxQzI1LjQ3NCw1MTEuNDQ0LDIyLjcyOCw1MTIsMjAuMDA1LDUxMnogICBNMjc2LDMyNVYyMTdjMC0xMS4wNDYtOC45NTQtMjAtMjAtMjBzLTIwLDguOTU0LTIwLDIwdjEwOGMwLDExLjA0Niw4Ljk1NCwyMCwyMCwyMFMyNzYsMzM2LjA0NiwyNzYsMzI1eiBNMjU2LDEyOCAgYy0xMS4wNDYsMC0yMCw4Ljk1NC0yMCwyMGwwLDBjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjBzMjAtOC45NTQsMjAtMjBsMCwwQzI3NiwxMzYuOTU0LDI2Ny4wNDYsMTI4LDI1NiwxMjh6Ii8+CgoKCgoKCgoKCgoKCgoKCjwvc3ZnPgo=" height="20"/></a>
                            <a href="{{ route('links.edit', $link->id) }}" class="btn btn-warning" title="Editar"><i class="far fa-edit"></i>Editar</a>
                            <form action="{{ route('links.destroy', $link->id) }}" method="post"
                                onsubmit="return confirm('¿Esta seguro que desea remover el enlace?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" height="20"></img></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table><br>
        {{ $links->links() }}<br>
        <a type="button" class="btn btn-primary mb-4 mt-2" href="{{ route('links.create') }}"><img src="https://www.flaticon.com/svg/vstatic/svg/1717/1717787.svg?token=exp=1612501962~hmac=bc6ddcdecf47c5a9fbc94bf32523262b" height="25"></img> Crear enlace</a>
    </div>
@endsection
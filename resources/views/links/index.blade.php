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
                        <form action="{{route('links.destroy', $link->id)}}" method="post"
                            onsubmit="return confirm('Quieres remover el enlace?')">                           
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-backspace"></i>Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
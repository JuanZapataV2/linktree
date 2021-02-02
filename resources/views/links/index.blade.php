@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Enlaces</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Etiqueta</th>
                <th>Mis enlaces</th>
            </tr>

            @foreach ($links as $link)

                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->label}}</td>
                    <td><a href="{{$link->url}}">{{$link->url}} </a></td>
                    <td>
                        <form action="{{route('links.destroy', $link->id)}}" method="delete">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
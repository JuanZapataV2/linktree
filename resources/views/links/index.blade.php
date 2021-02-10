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
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="Link options">
                                <a href="{{ route('links.show', $link->id) }}" class=" btn btn-info"><img src="https://www.flaticon.com/svg/vstatic/svg/292/292178.svg?token=exp=1612647412~hmac=eee0ed07d25f00207bb81c968b4fc672" height="25"/></a>
                                <a href="{{ route('links.edit', $link->id) }}" class="btn btn-warning" title="Editar"><img src="https://www.flaticon.com/svg/vstatic/svg/1250/1250615.svg?token=exp=1612638478~hmac=ea7a5980685aa1a419f06267c18d34df" height="25"/></a>
                                <form action="{{ route('links.destroy', $link->id) }}" method="post"
                                    onsubmit="return confirm('¿Esta seguro que desea remover el enlace?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class=" btn btn-danger"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" height="20"></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table><br>
        {{ $links->links() }}<br>
        <a type="button" class="btn btn-primary " href="{{ route('links.create') }}"><img src="https://www.flaticon.com/svg/vstatic/svg/1717/1717787.svg?token=exp=1612501962~hmac=bc6ddcdecf47c5a9fbc94bf32523262b" height="25"> Crear enlace</a>
    </div>
    
@endsection
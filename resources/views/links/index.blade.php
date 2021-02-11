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
                                <a href="{{ route('links.show', $link->id) }}" class=" btn btn-info"><img src="https://www.flaticon.com/svg/vstatic/svg/157/157933.svg?token=exp=1613078381~hmac=2f904b23e60108cbb5f46b005d4cf31f" height="25"/></a>
                                <a href="{{ route('links.edit', $link->id) }}" class="btn btn-warning" title="Editar"><img src="https://www.flaticon.com/svg/vstatic/svg/1250/1250615.svg?token=exp=1613078400~hmac=96e5b06f948c780a75f0aec7b55419cf" height="25"/></a>
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
        <a type="button" class="btn btn-primary " href="{{ route('links.create') }}"><img src="https://www.flaticon.com/svg/vstatic/svg/992/992651.svg?token=exp=1613078305~hmac=5de91314317f4b84da1bbd61dd4f85c5" height="25"> Crear enlace</a>
    </div>
    
@endsection
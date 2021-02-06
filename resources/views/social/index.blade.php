@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 jumbotron">
            <a type="button" class="btn btn-grey text-center position-absolute translate-middle" style="inline-block" href="{{ route('links.index') }}">
                <img src="https://www.flaticon.com/svg/vstatic/svg/130/130882.svg?token=exp=1612501804~hmac=ba4b4e8dcfd049fa6458d91f40f7d4bf" height="20">
            </a>
            <h2 class="mx-auto "style="width: 400px;">Perfil de {{$user->name}}</h2><br>
            <img class="align-middle"src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height:150px; float:left; border-radious:50%; margin-right:25px;"/>
            <form enctype="multipart/form-data" action="/profile" method="POST"
            onsubmit="return confirm('¿Esta seguro que desea cambiar su avatar?')">
                <div style="display:inline-block;">
                    <div class="card w-100">
                        <div class="card-body">
                          <h5 class="card-title">Sube tu propio avatar</h5>
                          <p class="card-text">Elige una de tus fotos como Avatar.</p>
                          <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
                        <input type="submit" class="pull-right btn btn-sm btn-primary mt-2" value="Actualizar avatar">
                        </div>
                      </div>
                </div>
            </form>
            <br><h5 class="m-2 underline">Mis redes sociales</h5>
            {{-- <div class="card w-100">
                @foreach ($socials as $social)
                    <div class=" m-1 p-1" style="display:inline-block;">
                        <a href={{$social->url}}><img class="" src="/uploads/socials/{{$social->image}}" style="width: 40px; height:40px; "/></a>
                        {{$social->url}}
                        <a type="button" class="fixed btn btn-grey " href="{{ route('social.edit',$social->id) }}"><img src="https://www.flaticon.com/svg/vstatic/svg/1250/1250615.svg?token=exp=1612638478~hmac=ea7a5980685aa1a419f06267c18d34df" height="22"></a>
                    </div>    
                @endforeach
            </div> --}}


            <table class="table table-striped table-hover">
                <tr>
                    <th scope="col">Icono</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">URL</th>
                    <th scope="col"></th>
                </tr>
    
                @foreach ($socials as $social)
                    <tr>
                        <td><a href={{$social->url}}><img class="" src="/uploads/socials/{{$social->image}}" style="width: 40px; height:40px; "/></a></td>
                        <td>{{$social->name}}</td>
                        <td><a href="{{$social->url}}">{{$social->url}}<a></td>
                        <td>
                            <div class="btn-toolbar ml-5" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group" role="group" aria-label="Link options">
                                    <a type="button" class= "btn btn-grey " href="{{ route('social.edit',$social->id) }}"><img src="https://www.flaticon.com/svg/vstatic/svg/1250/1250615.svg?token=exp=1612638478~hmac=ea7a5980685aa1a419f06267c18d34df" height="22"></a>
                                    <form action="{{ route('social.destroy', $social->id) }}" method="post"
                                        onsubmit="return confirm('¿Esta seguro que desea remover esta red social?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class=" btn btn-danger"><img src="https://icons-for-free.com/iconfiles/png/512/delete+remove+trash+trash+bin+trash+can+icon-1320073117929397588.png" height="20"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>
                <a type="button" class=" btn-primary mt-3 p-1 " href="{{ route('social.create') }}"><img src="https://www.flaticon.com/svg/vstatic/svg/1717/1717787.svg?token=exp=1612501962~hmac=bc6ddcdecf47c5a9fbc94bf32523262b" height="25"> Añadir red social</a>
            </div>
        </div>
</div>
@endsection

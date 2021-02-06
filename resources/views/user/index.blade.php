@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 jumbotron">
            <h2>Perfil de {{$user->name}} </h2>
            <img class="align-middle"src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height:150px; float:left; border-radious:50%; margin-right:25px;"/>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <div class="border border-dark p-3 border-3 rounded" style="display:inline-block;">
                    <label>Sube tu propio avatar</label><br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
                    <input type="submit" class="pull-right btn btn-sm btn-primary mt-2">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

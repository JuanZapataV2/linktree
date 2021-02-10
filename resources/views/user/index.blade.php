@extends('layouts.app')

@section('content')

<div class="container jumbotron jumbotron-fluid p-5" style="width: 850px;height: 850px;background-repeat: no-repeat; background: url('/uploads/backgrounds/{{$user->background}}'">
    <div> 
        <a>
            <h5 style="position:static; display:block; margin-left:auto; margin-right:auto; width:180px" class="p-1 text-center"> {{$user->name}} </h5>
            <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; border-radious:50%; display: block; margin-left: auto; margin-right: auto;"/>
        </a>
        <div class="jumbotron" style="position:static; display:block; margin-left:auto; margin-right:auto; width:450px">
            <h1>Mis enlaces</h1>
            <table class="table table-striped table-hover">
                @foreach ($links as $link)
                    <tr>
                        <td> <a href="{{$link->url}}">{{$link->label}}</td>
                    </tr>
                @endforeach
            </table><br>
            {{ $links->links() }}<br>
            @foreach ($socials as $social)
                <a href={{$social->url}}><img class="" src="/uploads/socials/{{$social->image}}" style="width: 40px; height:40px; "/></a></td>          
            @endforeach
        </div>
    </div>
</div>
@endsection
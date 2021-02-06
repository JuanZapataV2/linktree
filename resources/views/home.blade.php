@extends('layouts.app')

@section('content')

<div class="container jumbotron p-5" style="background: url('https://www.xmple.com/wallpaper/grey-white-gradient-highlight-linear-1920x1080-c2-696969-f8f8ff-l-50-a-135-f-21.svg');">
    <div> 
        <a>
            <h5 style="position:static; display:block; margin-left:auto; margin-right:auto; width:180px" class="p-1"> {{$user->name}} </h5>
            <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; border-radious:50%; display: block; margin-left: auto; margin-right: auto;"/>
        </a>
        <div class="container" style="position:static; display:block; margin-left:auto; margin-right:auto; width:450px">
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

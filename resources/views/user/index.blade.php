@extends('layout.layout')

@section('content')
	<div class="col-md-4">
		<div class="panel panel-default">
            <div class="panel-body">
            <img src="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="">
                    <br>
                    <h3>{{$userInfo->nombre}}</h3>
                    <h3>{{$userInfo->username}}</h3>
                </div>
            </div>
	</div>
	<div class="col-md-5">
            @foreach($userPost as $item)
            <div class="panel panel-default">
                <div class="panel-body">
                   <img src="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="">
                <h3>{{ $item->nombre }}<h5>{{ $item->username }}</h5></h3>
                <p>
                    {{ $item->contenido }}
                </p>
                <h6><a href="{ url('user/page/'.$item->id) }}">Detalles</a></h6> 
                </div>
            </div>
            @endforeach
        </div>
@stop
@extends('layout.layout')

@section('content')
    <section class="">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="">
                    <br>
                    <h3>{{Auth::user()->nombre}}</h3>
                    <h3>{{Auth::user()->username}}</h3>
                    <div class="row">
                        <div class="col-md-4">
                            Tuits
                            <br>
                            {{$numTuits}}
                        </div>
                        <div class="col-md-4">
                            Seguidores
                            <br>
                            123123
                        </div>
                        <div class="col-md-4">
                            Siguiendo
                            <br>
                            123123
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @foreach($posts as $item)
            <div class="panel panel-default">
                <div class="panel-body">
                   <img src="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="">
                <h3>{{ $item->nombre }}<h5>{{ $item->username }}</h5></h3>
                <p>
                    {{ $item->contenido }}
                </p>
                <h6><a href="{{ url('user/page/'.$item->id) }}">Detalles</a></h6> 
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>A Quien Seguir</h3>
                    <img src="http://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?f=y" alt="">
                    <h3>Nombre Usuario</h3>
                    <button class="btn btn-default">Seguir</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Redacta un Post</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('url'=>'post/create','class'=>'form-group','files'=>true)) !!}
            <textarea name="post" cols="69" rows="10" required></textarea>
            <strong>Subir Imagen(opcional):</strong>
            <input type="file" name="img">
            <br>
            <button type="submit" class="btn btn-primary">Publicar</button>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@stop

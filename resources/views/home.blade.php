@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img class="img-thumbnail" src="{{ url('/img/moustache.png') }}" width="80" height="80">
                        <br>
                        <span class="label label-info">Nombre: {{Auth::user()->name}}</span><br>
                        <span class="label label-info">Correo: {{Auth::user()->email}}</span><br>
                        <!--<a href="/users/editprofile/{{Auth::user()->id}}"><button class="btn btn-primary">Editar</button></a>-->
                    </div>
                </div>
            </div>
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading"><center>Tus Quejas</center></div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{$post->nombre_usuario}}
                                    <br>
                                    Fecha: {{$post->fecha}}
                                    <br>
                                    Delegacion: {{$post->nombre_delegacion}}
                                    <br>
                                    TIPO:{{$post->tipo}}
                                    <br>
                                    Tipo de Entrada:{{$post->nombre_entrada}}
                                    <br>
                                    MES:{{$post->nombre_mes}}
                                    <br>
                                    EMPRESA:{{$post->empresa}}
                                    <br>
                                    REPRESENTANTE:{{$post->representante}}
                                    <br>
                                    DOMICILIO:{{$post->domicilio}}
                                    <br>
                                    AMBITO:{{$post->nombre_ambito}}
                                    <br>
                                    Contenido: {{$post->contenido}}
                                    <br>
                                    Status: {{$post->nombre_status}}
                                </th>
                                <th>
                                    <a href="http://172.16.0.43:3333/posts/editposts/{{$post->id}}" ><button class="btn btn-primary">Editar</button> </a>
                                <th>
                                  <!--  <a href="/posts/delete/{{$post->id}}" ><button class="btn btn-danger">Delete</button> </a>-->
                                </th>
                            </tr>
                        @endforeach
                        </thead>
                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

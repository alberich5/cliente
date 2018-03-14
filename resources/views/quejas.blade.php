@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())

       @endif
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><center>AQuejas</center></div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            @foreach($posts as $post)
                            <tr>
                                <th><h4>{{$post->nombre_usuario}}</h4>
                                    <br>
                                    FECHA RECIBIO:{{$post->fecha}}
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
                                    DELEGACION:{{$post->nombre_delegacion}}
                                    <br>
                                    CODIGO:{{$post->nombre_codigo}}
                                    <br>
                                    CODIGO QUEJA:{{$post->nombre_queja}}
                                    <br>
                                    STATUS:
                                    @if('ATENDIDO'  == $post->nombre_status)
                                      <span class="label label-warning">{{$post->nombre_status}}</span>
                                    @endif
                                    @if('PENDIENTE'  == $post->nombre_status)
                                    {{$post->nombre_status}}
                                    @endif
                                    <br>
                                    DESCRIPCION DE LA QUEJA:{{$post->contenido}}
                                </th>
                                <th>
                                    @if(Auth::check() && Auth::user()->id == $post->id_usuario || Auth::check() && Auth::user()->rol == 'admin')
                                <a href="/posts/editposts/{{$post->id}}" ><button class="btn btn-primary">Editar</button> </a>
                                </th>
                                <th>
                                    <!--<a href="/posts/delete/{{$post->id}}" ><button class="btn btn-danger">Delete</button> </a>-->
                                    @endif
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

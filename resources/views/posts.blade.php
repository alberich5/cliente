@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        @if (Auth::check())
            <form action="posts" class="form-horizontal" method="post">
                @if(count($errors) > 0)
                    <div class="errors">
                        <ul class="alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control" name="nombre_usuario" value="{{ Auth::user()->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="fecha">Fecha que recibio la queja:</label>
                        <input type="date" class="form-control" name="fecha" value="<?php echo date("Y-m-d");?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="tipo">Tipo de queja:</label>
                      <select name="tipo" class="form-control">
                          <option value="Queja">Queja</option>
        	            		<option value="Sugerencia">Sugerencia</option>
                    	</select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="entrada">Entrada:</label>
                      <select name="id_entrada" class="form-control">
                        @foreach ($entrada as $en)
                        <option value="{{ $en->id}}">{{ $en->nombre_entrada}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="mes">Mes:</label>
                      <select name="id_mes" class="form-control">
                        @foreach ($mes as $m)
                        <option value="{{ $m->id}}">{{ $m->nombre_mes}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="empresa">Empresa:</label>
                        <input type="text" class="form-control" name="empresa" placeholder="Empresa..." value="{{old('empresa')}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="representante">Representante legal:</label>
                        <input type="text" class="form-control" name="representante" placeholder="Empresa..." value="{{old('representante')}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="domicilio">Domicilio del Servicio:</label>
                        <input type="text" class="form-control" name="domicilio" placeholder="Empresa..." value="{{old('domicilio')}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="ambito">Ambito:</label>
                      <select name="id_ambito" class="form-control">
                        @foreach ($ambito as $amb)
                        <option value="{{ $amb->id}}">{{ $amb->nombre_ambito}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="delegacion">Delegacion o Sub Delegacion:</label>
                      <select name="id_delegacion" class="form-control">
                        @foreach ($delegacion as $dele)
                        <option value="{{ $dele->id}}">{{ $dele->nombre_delegacion}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="codigo">Codigo:</label>-
                      <select name="id_codigo" class="form-control">
                        @foreach ($codigo as $codi)
                        <option value="{{ $codi->id}}">{{ $codi->nombre_codigo}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="codigo_queja">Codigo de Queja:</label>
                      <select name="id_codigo_queja" class="form-control">
                        @foreach ($codigoque as $que)
                        <option value="{{ $que->id}}">{{ $que->nombre_queja}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="status">Status:</label>
                      <select name="id_status" class="form-control">
                        @foreach ($status as $sta)
                        <option value="{{ $sta->id}}">{{ $sta->nombre_status}}</option>
                         @endforeach
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="contenido">Quejas</label>
                        <input type="text-area" class="form-control" name="contenido" placeholder="Escribe la Queja..." value="{{old('contenido')}}">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Guardar" v-on:click="mostrarAlert">
            </form>


       @endif
       <!---<div class="row">
          <div class="col-xs-12">
            <pre>@{{$data}}</pre>
          </div>
        </div>-->
    </div>
@endsection

@section('js')
  <script type="text/javascript">
    var vm = new Vue({
            //id asignado al div en el que funcionara vue
            el: '#app',
            //funcion al crear el objet
            created: function() {
              this.mostrarStatu();
            },
            data:{
                errors:[],
                status:[],
                fecha:'',
                searchUsuario:{'username':'','nombre':'','paterno':'','materno':''},
                    },
            methods:{
                mostrarAlert:function(){
                  swal(
                'Listo',
                'Se a guardado la queja',
                'success'
              );
                },
                mostrarCancelar:function(){
                    toastr.success('Eliminado');
                },
                mostrarStatu:function(){
                    var urlStatus = 'status';
                    axios.get(urlStatus).then(response => {
                    this.status = response.data
                  });
                },
        }});
    </script>
@endsection

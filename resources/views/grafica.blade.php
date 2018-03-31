@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="export-delegaciones" class="form-horizontal" method="get">
        <div class="form-group">
            <div class="col-sm-5">
              <label for="tipo">Tipo de queja:</label>
              <select name="tipo" class="form-control">
                  <option value="Queja">Queja</option>
                  <option value="Sugerencia">Sugerencia</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5">
              <label for="delegacion">Delegacion o Sub Delegacion:</label>
              <select name="id_delegacion" class="form-control">
                @foreach ($delegacion as $dele)
                <option value="{{ $dele->id}}">{{ $dele->nombre_delegacion}}</option>
                 @endforeach
              </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Descargar">
      </form>
    </div>
@endsection

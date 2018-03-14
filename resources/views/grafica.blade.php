@extends('layouts.app')

@section('content')
    <div class="container">
      <form action="export-delegaciones" class="form-horizontal" method="get">
      <div class="form-group">
          <div class="col-sm-6">
            <label for="fecha">Quejas por delegacion:</label>
              <br>
              <input type="submit" class="btn btn-primary" value="Quejas por Deledacion" >
          </div>

      </div>
      </form>
    </div>
@endsection

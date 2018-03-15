<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Status;
use App\Mes;
use App\Ambito;
use App\Delegacion;
use App\Codigo;
use App\Entrada;
use App\Codigoqueja;
use DB;

class ExcelController extends Controller
{


      public function exportDelegacion(Request $request){
        $delegacion = DB::table('delegacion as de')
               ->select(DB::raw('COUNT(*) AS total'))
               ->get();
               dd($delegacion);

        $omar='0';
        for ($i=1; $i <=2 ; $i++) {
          $articulos = DB::table('posts as po')
           ->join('delegacion as di','po.id_delegacion','=','di.id')
                 ->select(DB::raw('COUNT(*) AS canti'))
                 ->where('po.id_delegacion','=',$i)
                 ->get();
          $dele
          $omar.=$articulos;

        }
              dd($omar);


               return $omar;
      }
}

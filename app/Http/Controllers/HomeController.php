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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$posts=Post::where('id_usuario','=',$request->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        $posts = Post::leftjoin('mes', 'posts.id_mes', '=', 'mes.id')
                ->leftjoin('status', 'posts.id_status', '=', 'status.id')
                ->leftjoin('codigo', 'posts.id_codigo', '=', 'codigo.id')
                ->leftjoin('codigoqueja', 'posts.id_codigoqueja', '=', 'codigoqueja.id')
                ->leftjoin('entrada', 'posts.id_entrada', '=', 'entrada.id')
                ->leftjoin('ambito', 'posts.id_ambito', '=', 'ambito.id')
                ->leftjoin('delegacion', 'posts.id_delegacion', '=', 'delegacion.id')
                ->select('posts.fecha','mes.nombre_mes','status.nombre_status','codigo.nombre_codigo','entrada.nombre_entrada','ambito.nombre_ambito','delegacion.nombre_delegacion','posts.empresa','posts.representante','posts.domicilio','posts.contenido','posts.nombre_usuario','codigoqueja.nombre_queja','posts.tipo','posts.id_usuario','posts.id')
                ->where('posts.id_usuario','=',$request->user()->id)
                 ->paginate(10);

        return view('home',compact("posts"));
    }
}

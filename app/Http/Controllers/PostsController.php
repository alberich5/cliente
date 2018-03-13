<?php

namespace App\Http\Controllers;

use App\Post;
use App\Status;
use App\Mes;
use App\Ambito;
use App\Delegacion;
use App\Codigo;
use App\Entrada;
use App\Codigoqueja;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    //funcion para mostrar el index
    public function index()
    {
      //  $posts = Post::orderBy('created_at', 'desc')->paginate(10);
       $mes = Mes::orderBy('created_at', 'desc')->get();
        $status = Status::orderBy('created_at', 'desc')->get();
        $ambito = Ambito::orderBy('created_at', 'desc')->get();
        $delegacion = Delegacion::orderBy('created_at', 'desc')->get();
        $codigo = Codigo::orderBy('created_at', 'desc')->get();
        $codigoqueja = Codigoqueja::orderBy('created_at', 'desc')->get();
        $entrada = Entrada::orderBy('created_at', 'desc')->get();
        return view('posts',["mes"=>$mes,"status"=>$status,"ambito"=>$ambito,"delegacion"=>$delegacion,"codigo"=>$codigo,"codigoque"=>$codigoqueja,"entrada"=>$entrada]);
    }
    //funcion para mostrar las quejas
    public function queja()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('quejas',compact("posts"));
    }
    //funcion para mostrar las graficas
    public function grafica()
    {

        return view('grafica');
    }

    //funcion para mostrar filtro
    public function filtro()
    {

        return view('filtro');
    }

    //funcion para mostrar quejas atendidas
    public function atendida()
    {
        $posts = Post::select('nombre_usuario','contenido','status')->where('status','atendida')->get();
        return $posts;
    }

    public function status()
    {
         $status = Status::all();
        return $status;
    }

     //funcion para mostrar quejas pendientes
    public function pendiente()
    {
        $posts = Post::select('nombre_usuario','contenido','status')->where('status','pendiente')->get();
        return $posts;
    }

    public function store(Request $request)
    {


        $this->validate($request,[
            'id_usuario'=>'required',
           'nombre_usuario' => 'required',
            'fecha' => 'required',
            'tipo' => 'required',
            'entrada' => 'required',
            'empresa' => 'required',
            'mes' => 'required',
            'representante' => 'required',
            'delegacion' => 'required',
            'domicilio' => 'required',
            'ambito' => 'required',
            'codigo' => 'required',
            'codigo_queja' => 'required',
            'status' => 'required',
            'contenido' => 'required',
        ]);

        //dd($request->all());

        $post=new Post;
        $post->id_usuario=$request->get('id_usuario');
        $post->id_entrada=$request->get('id_entrada');
        $post->id_mes=$request->get('id_mes');
        $post->id_ambito=$request->get('id_ambito');
        $post->id_delegacion=$request->get('id_delegacion');
        $post->id_codigo=$request->get('id_codigo');
        $post->id_codigoqueja=$request->get('id_codigo_queja');
        $post->id_status=$request->get('id_status');
        $post->nombre_usuario==$request->get('nombre_usuario');
        $post->fecha=$request->get('fecha');
        $post->tipo=$request->get('tipo');
        $post->entrada=$request->get('cantidad');
        $post->empresa=$request->get('cantidad');
        $post->representante=$request->get('cantidad');
        $post->domicilio=$request->get('cantidad');
        $post->contenido=$request->get('contenido');
        $post->save();


        return redirect('quejas');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('posts');
    }

    public function show($id)
    {
        $post=Post::findOrFail($id);

        return view('posts/editposts',compact('post'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'id_usuario'=>'required',
            'nombre_usuario' => 'required',
            'contenido' => 'required',
        ]);
        $post = Post::findOrFail($id);
        $input = $request->all();
        $post->fill($input)->save();

        return redirect("quejas");
    }

}

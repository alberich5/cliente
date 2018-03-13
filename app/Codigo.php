<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    //Hacemos ferencia ala tabla
    protected $table='codigo';
    //hacemos refencia al id
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_codigo'
    ];

    protected $guarded =[

    ];
}

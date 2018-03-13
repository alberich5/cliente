<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambito extends Model
{
    ///Hacemos ferencia ala tabla
    protected $table='ambito';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_ambito'
    ];

    protected $guarded =[

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    //Hacemos ferencia ala tabla
    protected $table='entrada';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_entrada'
    ];

    protected $guarded =[

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codigoqueja extends Model
{
    //Hacemos ferencia ala tabla
    protected $table='codigoqueja';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
    'id_codigo',
     'nombre_queja'
    ];

    protected $guarded =[

    ];
}

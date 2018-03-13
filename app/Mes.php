<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    //Hacemos ferencia ala tabla
    protected $table='mes';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_mes'
    ];

    protected $guarded =[

    ];
}

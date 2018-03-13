<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    //Hacemos ferencia ala tabla
    protected $table='delegacion';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_delegacion'
    ];

    protected $guarded =[

    ];
}

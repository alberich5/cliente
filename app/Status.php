<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
  //Hacemos ferencia ala tabla
    protected $table='status';
    //hacemos refencia al id 
    protected $primaryKey='id';

    public $timestamps=false;
    //le decimos que campos podemos acceder
    protected $fillable =[
     'nombre_status'
    ];

    protected $guarded =[

    ];
}

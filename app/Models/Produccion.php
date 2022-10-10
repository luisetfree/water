<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;


    //protected $fillable = ['caudal','fecha','hora','cloro_residual','nivel_camara','presion_linea','id_estacion'];

     protected $fillable = ['caudal'];
}

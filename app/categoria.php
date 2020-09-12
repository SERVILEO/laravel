<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable=['c_Nombre','c_Descripcion','c_status'];

    public static function filtrar($query=''){
     
       
    }
    
}

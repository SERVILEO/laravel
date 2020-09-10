<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $fillable=['p_Nombre','p_Descripcion','p_UrlImagen','p_Precio','p_Stock','p_unidades','p_status','id_Categoria'];

    public static function search($query=''){
        if(!$query){
            return self::all();
        }
        return self::where('p_Nombre','like',"%$query%")
        ->orWhere('p_Descripcion','like',"%$query%")
        ->get();
    }


}

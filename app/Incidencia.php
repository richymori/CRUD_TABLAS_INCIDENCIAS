<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
      /*
    RELACION UNA INCIDENCIA PERTENECE A UN MODULO
    */
    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }


      /*
    RELACION UNA INCIDENCIA PERTENECE A UN TIPO DE INCIDENCIA
    */
    public function tipo_incidencia()
    {
        return $this->belongsTo(TipoIncidencia::class);
    }


     /*
    RELACION UNA INCIDENCIA PERTENECE A UN USER
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

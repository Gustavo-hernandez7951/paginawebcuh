<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class participante extends Model
{
    // nombre tabla
    protected $table='cc_participantes_curso';
    // id
    protected $primaryKey = 'idsolicitud';
    // id no es incrementable 123456789
    public $incrementing = false;
}

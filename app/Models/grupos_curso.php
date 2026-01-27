<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class grupos_curso extends Model
{
    // nombre tabla
    protected $table='cc_catalogo_grupos';
    // id
    protected $primaryKey = 'idcurso';
    // id no es incrementable 123456789
    public $incrementing = false;
}

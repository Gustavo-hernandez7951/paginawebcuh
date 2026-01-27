<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    // nombre tabla
    protected $table='cc_catalogo_cursos';
    // id
    protected $primaryKey = 'idcurso';
    // id no es incrementable 123456789
    public $incrementing = false;

    public function grupos()
    {
        return $this->hasOne(grupos_curso::class, 'idcurso', 'idcurso');
    }
}

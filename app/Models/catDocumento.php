<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catDocumento extends Model
{
    // nombre tabla
    protected $table='emision_codigoqr_catdocumento';
    // id
    protected $primaryKey = 'iddocumento_emision';
    // id no es incrementable 123456789
    public $incrementing = false;
}   
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class valDocumentos extends Model
{
    // nombre tabla
    protected $table='emision_codigoqr';
    // id
    protected $primaryKey = 'idfolio_emision';
    // id no es incrementable 123456789
    public $incrementing = false;
}
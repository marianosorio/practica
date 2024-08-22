<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsiento extends Model
{
    protected $table = 'tipos_asientos';
    protected $primaryKey = 'idTipoAsiento';
    public $timestamp = false;
}

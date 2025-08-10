<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    protected $table = 'proveedores';

    public $timestamps = false;

}

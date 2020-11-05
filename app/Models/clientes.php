<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'name',
        'apellidoPa',
        'apellidoMa',
        'email',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\roles;

class UserEloquent extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'apellidoPa',
        'apellidoMa',
        'direccion',
        'telefono',
        'fechaNaci',
        'email',
        'password',
        'roles_id',
        
        
    ];

    public function getRoles()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\roles','roles_id','id');
    }

}

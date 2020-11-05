<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    protected $table = 'compra';

    protected $fillable = ['name', 'cproducto_id', 'id_proveedor', 'costo', 'fecha',];

    public function getcProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\cProducto','cproducto_id','id');
    }

    public function getProveedor()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\proveedor','id_proveedor','id');
    }
}

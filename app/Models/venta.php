<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $table = 'venta';

    protected $fillable = ['id_clientes', 'id_producto', 'costo', 'fecha',];

    public function getClientes()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\clientes','id_clientes','id');
    }

    public function getProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\Producto','id_producto','id');
    }
}

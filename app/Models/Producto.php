<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = ['nombre', "id_compra", "cproducto_id", "descripcion", "marca", "modelo", "precio", "venta",];

    public function getcProducto()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\cProducto','cproducto_id','id');
    }

    public function getCompra()
    {
                            // Modelo de referencia, campo local, campo foráneo 
        return $this->belongsTo('App\Models\compra','id_compra','id');
    }

}

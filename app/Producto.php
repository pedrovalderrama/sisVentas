<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= 'productos';

    protected $primaryKey="IdProductos";

    public $timestamps=false;

    protected $fillable = [
    	'CodigoBarra',
    	'Descripcion',
    	'UMedida',
    	'Precio1',
    	'Precio2',
    	'Precio3',
    	'Precio4',
    	'Stock_Minimo',
    	'Costo'

    ];

    protected $guarded = [
    	
    ];
}

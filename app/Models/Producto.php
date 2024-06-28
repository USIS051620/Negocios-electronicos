<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'portadas', 'imagenes', 'fecha', 'descuento', 'fecha_descuento', 'estado', 'existencias',
    ];

    protected $casts = [
        'precio' => 'float',
        'descuento' => 'float',
    ];

    protected $dates = [
        'fecha',
        'fecha_descuento',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Productos;
use App\Models\Transporte;

class Venta extends Model
{
    /** @use HasFactory<\Database\Factories\VentaFactory> */
    use HasFactory;
    protected $fillable = [
        'numeroOrden',
        'total',
        'cliente_id',
        'producto_id',
        'transporte_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function producto()
    {
        return $this->belongsTo(Productos::class);
    }

    public function transporte()
    {
        return $this->belongsTo(Transporte::class);
    }

}

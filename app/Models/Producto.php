<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);  // Un producto pertenece a una categoria
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('cantidad', 'precio');  // Un producto puede estar en varios pedidos
    }
}
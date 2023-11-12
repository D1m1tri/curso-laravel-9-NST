<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'slug',
        'categoria_id',
        'user_id'
    ];

    protected $table = 'produtos';

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dica extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['categoria_id', 'descricao'];

    public function categoria(){
        return $this->belongsTo('\App\Models\Categoria');
    }
}

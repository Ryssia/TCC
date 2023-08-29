<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciclo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['inicio', 'final', 'fluxo', 'colica', 'dor_cabeca', 'dor_seios', 'user-id'];

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $fillable = [
        'nome','idade'
    ];

    public function filme(){
        return $this->belongsTo('App\Filmes','classificacaos_id');
    }
}

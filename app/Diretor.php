<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function filme(){
        return $this->belongsTo('App\Filmes','diretors_id');
    }
    
    
}

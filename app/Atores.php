<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    protected $fillable = [
        'nome'
    ];

    //cria a relação com a tabela de filmes
    public function filmes()
    {
        return $this->belongsToMany('App\Filmes');
    }
  
}

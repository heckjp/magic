<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'titulo','subtitulo','sinopse','ano','diretors_id','classificacaos_id'
    ];
    
    //cria a relação  com a tabela de diretores
    public function diretor(){
        return $this->hasOne('App\Diretor','diretors_id');
    }

    //cria a relação com a tabela de classificação
    public function classificacao(){
        return $this->hasOne('App\Classificacao','classificacaos_id');
    }

    //cria a relação com a tabela de atores
    public function atores()
    {
        return $this->belongsToMany('App\Atores');
    }
}

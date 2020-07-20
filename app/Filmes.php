<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    protected $fillable = [
        'titulo','subtitulo','sinopse','ano','classificacao_id'
    ];
}

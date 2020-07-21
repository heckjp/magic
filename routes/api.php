<?php
//rotas para a api de diretor
Route::apiResource('diretor','api\DiretorController');

//rotas para a api de atores
Route::apiResource('ator','api\AtoresController');

//rotas para api de  classificacao
Route::apiResource('classificacao','api\ClassificacaoController');

//rotas para a api de filmes

Route::apiResource('filme','api\FilmeController');

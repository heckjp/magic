# Teste Api Magic

## Descrição

Aplicação de teste realizado para a empresa Rede Magic onde o objetivo é criar uma API para cadastro de filmes com seus respectivos atores, diretor e classificação.

## Tecnologias utilizadas
PHP 7.2
Mysql 5.7
Laravel 7.20


## Instalação
para copiar o projeto digite o comando:

`git clone https://github.com/heckjp/magic.git`

em seguida execute o comando do composer:

`composer install`

e gere uma nova chave para o laravel

`php artisan key:generate`


edite o arquivo .env para configurar seu banco de dados e rode o comando:
`php artisan migrate`

## Consumo da api
Para o consumo  da api segue-se o padrão de url base do projeto + /api/ + rota

**Rotas disponiveis**

- atores: /api/ator/
- diretor: /api/diretor/
- classificação: /api/classificacao/
- filmes: /api/filme/


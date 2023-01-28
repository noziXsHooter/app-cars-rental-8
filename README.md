<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




# Install

composer create-project --prefer-dist laravel/laravel="8.6" app-cars-rental

php artisan storage:link



## Install JWT

https://jwt-auth.readthedocs.io/en/develop/laravel-installation/

composer require tymon/jwt-auth "1.0.2"

### If composer above doesn't work run this: 
composer require -w tymon/jwt-auth --ignore-platform-reqs

php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

php artisan jwt:secret





# APP CAR RENTALS

## Api Rest - Backend

### Table Marcas

id   -   nome   -   imagem   -   created_at   -   updated_at


### Table Modelos

id   -   marca_id   -   nome   -   imagem   -   numero_portas   -   lugares   -   air_bags   -   abs   -   created_at   -   updated_at


### Table Clientes

id   -   nome  -  created_at   -   updated_at

### Table Carros

id   -  modelo_id   -   placa   -   disponivel   -   km    -   created_at   -   updated_at

### Table Locações

id   -   cliente_id   -   carro_id   -   data_inicio_periodo   -   data_final_previsto_periodo   -   data_final_realizado_periodo   -   valor_diaria   -   km_inicial   -   km_final   -   created_at   -   updated_at


## ATRIBUTOS E FILTRO


'https://carsrentalapi.tech/api/v1/modelos?' ---> Inicie chamando o modelo.

'atributos=nome,numero_portas,marca_id'  ---> Concatene os atributos que deseja mostrando no resultado conforme as colunas das tabelas.

'&atributos_marca=nome' ---> Concatene os atributos da marca do modelo escolhido.

'&filtro=nome:like:bmw%' ---> Concatene com filtro e query separada por ':'(dois pontos).

';abs:=:1' ---> Adicione mais filtros separando ';'(ponto e vírgula).


# Exemplo

'https://carsrentalapi.tech/api/v1/modelos?atributos=nome,numero_portas,marca_id&atributos_marca=nome&filtro=nome:like:BMW%;abs:=:1'


Esta query retornará o seguinte Array de Objetos:


[
    {
        "nome": "BMW Série 5",
        "numero_portas": 4,
        "marca_id": 9,
        "marca": {
            "id": 9,
            "nome": "BMW"
        }
    },
    {
        "nome": "BMW x6",
        "numero_portas": 4,
        "marca_id": 9,
        "marca": {
            "id": 9,
            "nome": "BMW"
        }
    }
]




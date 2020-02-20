# Teste Prático PHP Laravel

### Requisitos 

PHP 7 ou superior
Laravel 6.0 ou superior
Composer
Mysql

### Intruções para instalação

 1° Clonar projeto com  comando - git clone https://github.com/PauloMacario/test_18_02_2020.git

```sh
$ git clone https://github.com/PauloMacario/test_18_02_2020.git
```
2° Acessar pasta raiz do projeto e executar os comandos (Linux )
```sh
$ composer install
$ cp .env.example .env 
```
a - Criar um banco MySql vazio para rodar as migrations.
b - Configurar no .env acesso ao banco de dados.   (linhas  DB_ )

4° Gerar Key
```sh
$ php artisan key:generate
```
5° Gerar as tabelas do banco e popular dois registros seeders
```sh
$ php artisan migrate:fresh --seed
```

6° Comando para rodar projeto localmente
```sh
$ php artisan serve
```

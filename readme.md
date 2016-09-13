# Extrator das informações do CNES da API AppCivico

## Objetivo
Projeto desenvolvido para criar uma aplicação que extrai as informações da API AppCivico e cria uma base de dados confiável sobre as informações do CNES, tendo como intermédio o TCU.

## Utilização
######Clonando o projeto.
```sh
$ git clone https://github.com/danielsouzaaf/extrator_appcivico_cnes.git
```
######Criando o arquivo .env
```sh
$ cd extrator_appcivico_cnes/
$ cp .env-example .env
```
######Abra o arquivo .env e modifique as seguintes linhas para
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=postgres
DB_PASSWORD=pgadmin

######Executando o composer
```sh
$ composer install
```

######Rodando as migrações junto com o Seed de UFS
```sh
$ php artisan migrate --seed
```

######Observando as rotas disponiveis
```sh
$ php artisan list
```

######Criando a base de dados dos estabelecimentos
```sh
$ php artisan consultarcnes:estabelecimentos
```
## Licença
The Extrator AppCivico CNES is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

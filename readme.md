

# Gestao de incendetes
Este é um teste visando a criação de um prototipo de um sistema simples usando laravel.

## Pré Requisitos
  Composer<br>
  Laravel 5.5
  
## Começando

Clone o projeto:
   https://github.com/roderickNascimento/gestaoIncidentes.git
  (se preferir use a opção SSH)
  
 ### Comandos
  
 ```cd gestaoIncidentes
  
  composer install
  composer dump

  cp .env.example .env
  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gestaoIncidentes
    DB_USERNAME=root
    DB_PASSWORD=SuaSenha

  php artisan key:generate

  php artisan migrate
  php artisan db:seed
  
  php artisan serve 

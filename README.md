# Projeto TCC 

Links Úteis:

## Passo a passo para rodar o projeto
Clone o projeto
```sh
git clone https://github.com/jenises/projeto_tcc.git)
```
```sh
cd laravel-11/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize essas variáveis de ambiente no arquivo .env
```dosini
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:xUz27tVgmim4weJvpJHi2EZxg8Z+A6IteWrnQxyBRc0=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost:8000

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
APP_MAINTENANCE_STORE=

DB_CONNECTION=pgsql
DB_HOST=laravel_postgres
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret
```


Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```
Entre no container pelo perminal 
```sh
sudo docker exec -it laravel_app bash
```
De dentro do container digite o comando abaixo para que possa rodar o vith 
```sh
npm run dev
```

Acesse o projeto
[http://localhost:8080](http://localhost:8080)

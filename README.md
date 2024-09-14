# Work Manager

# Requirements

- PHP Instalado na sua maquina 8.2.23
- Extensoes do PHP `php -m`
```
[PHP Modules]
calendar Core ctype date dom exif FFI fileinfo filter ftp gettext hash iconv json libxml openssl pcntl pcre PDO Phar posix random readline Reflection session shmop SimpleXML sockets sodium SPL standard sysvmsg sysvsem sysvshm tokenizer xml xmlreader xmlwriter xsl Zend OPcache zip zlib pdo_pgsql pgsql

[Zend Modules]
Zend OPcache
```

- Composer

Tem que ter um banco de dados postgres 16
`docker compose up -d`


# Getting started

Copiar .env
  -> cp .env.example .env
  -> preencher o .env com as suas credenciais

- `composer install`
  -> baixa todas as dependencias/lib do projeto
    -> cria a pasta vendor/

Crie uma chave para o seu projeto:
 -> `php artisan key:generate`

Executar o projeto
  -> `php -S localhost:80 -t=public/`

# Configurar o banco de dados

Instalar um banco de dados via docker

conecta um banco de dados no seu .env

`php artisan migrate`

`php artisan db:seed`
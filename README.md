# Laravel Início

## Sobre o projeto
Laravel Início é o projeto base para o desenvolvimento de qualquer outro projeto utilizando o framework.

## Ambiente

### Descrição:

- [x] Laravel 10
- [x] MySQL 8
- [x] phpMyAdmin
- [x] Redis

Porta das aplicações:

- Aplicação: `80`
- Mysql: `3306`
- phpMyAdmin: `8090`
- Redis: `6369`

## Execução

### Pré-requisitos:
- <a href="https://docs.docker.com/engine/install/" target="_blank">Docker</a>

### Como executar o projeto:
```sh
# Clona a aplicação do GitHub
$ git clone git@github.com:leonardopigatto/laravel-inicio.git

# Acessa a pasta
$ cd laravel-inicio

# Cria o arquivo para as variáveis de ambiente
$ cp .env.example .env
```

Atualize as variáveis presentes no arquivo .env:
```dosini
DB_PASSWORD=password
```

Continuação da execução:
```sh
# Inicia os containers
$ sail up -d

# Instala as dependências do Laravel
$ sail composer install

# Gera a key do projeto Laravel
$ sail artisan key:generate

# Gera as tabelas
$ sail artisan migrate

# Instala as dependências do Javascript
$ sail npm install

# Compila as dependências do Javascript
$ sail npm run dev # Desenvolvimento
$ sail npm run build # Produção
```

### Acesso:
- Para acessar o projeto: http://localhost
- Para acessar o phpMyAdmin: http://localhost:8090

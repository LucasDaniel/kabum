
# Sorteio

Teste de Arquitetura em PHP
Criar de API com PHP puro

## Tecnologias

Composer 2.4.2v
Docker 25.0.3v
PHP 8.3v
postgres 17.2v

## Instalação

Faça download do projeto pelo github

```bash
  git clone https://github.com/LucasDaniel/sorteio.git
```

Faça download do composer

[Composer](https://getcomposer.org/download/)

Verifique se ele esta instalado pelo comando
```bash
  composer -v
```

Faça o download do docker para windows
    
[Docker](https://www.docker.com/products/docker-desktop/)

Verifique se ele esta instalado pelo comando
```bash
  docker -v
```
Abra o visual studio, no terminal vá na pasta que deseja e rode o Ddockerfile do projeto
```bash
  docker compose up --build
```
Depois de rodar o docker, instale as dependencias
```bash
  composer install
```
Crie o database no pgAdmin4 pela url
http://localhost:5000/

Obs: Pode demorar um pouco para carregar, você pode ir no docker e abrir pelo programa.

Logue no psgAdmin4 com o login e senha
```bash
  login: admin@example.com
  senha: admin
```
Crie um servidor de nome 'Megasena'
Na aba 'Conexão' coloque os seguintes dados
```bash
  Host name/adress = 'host.docker.internal'
  Port: 5432
  Maintence database: megasena
  Username: root
  Senha: root
```
Voltando ao visual studio, nas rotas, vamos habilitar as rotas de migrate e seed para roda-los.
```bash
//Route::get('/migrate', 'HomeController@migrate');
//Route::get('/seeder', 'HomeController@seeder');
```
Rode pela url
```bash
localhost/migrate
localhost/seeder
```
Verifique no pgAdmin4 as tabelas para as criações.

## Documentação da API

#### Cria um novo sorteio

```http
  POST localhost/sorteio/create
```
Não é necessario nenhum argumento

#### Cria um novo apostador

```http
  POST localhost/apostador/create
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `nome`      | `string` | **Obrigatório**. O nome do novo tripualnte |

#### Cria bilhetes randomicos para um apostador em um sorteio

```http
  POST localhost/apostador-bilhete/create-random-numbers
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id_apostador`      | `integer` | **Obrigatório**. ID do apostador |
| `id_sorteio`      | `integer` | **Obrigatório**. Id do sorteio |
| `quantTryNumbers`      | `integer` | **Obrigatório**. Quantidade de bilhetes a criar |
| `quantNumbers`      | `integer` | **Obrigatório**. Quantidade de numeros em cada bilhete |

#### Gera os numeros vencedores de um sorteio

```http
  POST localhost/sorteio/generate-win-numbers
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id_sorteio`      | `integer` | **Obrigatório**. ID do sorteio |

#### Gera a tabela em html dos resultados do sorteio

```http
  POST localhost/html/generate
```

| Parâmetro   | Tipo       | Descrição                                   |
| :---------- | :--------- | :------------------------------------------ |
| `id_sorteio`      | `integer` | **Obrigatório**. ID do sorteio |

## Autores

- [Lucas Daniel Beltrame - Linkedin](https://www.linkedin.com/in/lucas-dniel-beltrame-de-lima-rodrigues/)

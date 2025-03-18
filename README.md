
# KABUM

Projeto de criar de API com PHP puro

## Tecnologias

Composer 2.4.2v
Xampp (PHP)
mysql 8.0v

## Instalação

Faça download do projeto pelo github

```bash
  git clone https://github.com/LucasDaniel/kabum.git
```

Faça o download do Xampp

```bash
  https://www.apachefriends.org/pt_br/index.html
```

Inicie um servidor Mysql para o banco de dados

Voltando ao visual studio, nas rotas, vamos habilitar as rotas de migrate e seed para roda-los.

```bash
//Route::get('/migrate', 'HomeController@migrate');
//Route::get('/seeder', 'HomeController@seeder');
```
Rode pela url

```bash
localhost/KABUM/migrate
localhost/KABUM/seeder
```
Verifique no banco de dados as criações

Você pode logar no sistema pela url
```bash
localhost/KABUM/
Login: a@a
senha: a
```

## O que o sistema faz

Cria/edita/exclui clientes (vinculando endereços ao cliente)
Cria/edita/exclui endereços
Gera relatorios de clientes e endereços

## Autores

- [Lucas Daniel Beltrame - Linkedin](https://www.linkedin.com/in/lucas-dniel-beltrame-de-lima-rodrigues/)

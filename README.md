📚 Repositório de Estudos — Alura

Este repositório foi criado com o objetivo de organizar alguns cursos da Alura realizados na ```CARREIRA PHP```, organizando cada aprendizado de forma prática e versionada.

## 🚀 Instalação

### 1. Instalar dependências 

```composer install```

```npm install```

### 2. Configuração de Ambiente

```cp .env.example .env```

```php artisan key:generate```

### 3. Banco de Dados

Certifique-se de que seu servidor de banco de dados (ex: XAMPP/MySQL) está ativo. No arquivo .env, ajuste as seguintes linhas de acordo com suas credenciais locais:

- DB_DATABASE 
- DB_USERNAME
- DB_PASSWORD

```php artisan migrate```

### 4. Compilação de Assets (Laravel Mix)

```npm run dev```
ou
```npm run watch```

### 5. Iniciar o Servidor

```php artisan serve```

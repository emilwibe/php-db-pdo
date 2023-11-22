# php-db-pdo

Eksempel på en databaseklasse. Bruges udelukkende til undervisningsbrug

<hr>

- [php-db-pdo](#php-db-pdo)
  - [Installer DB](#installer-db)
  - [Forbind til database](#forbind-til-database)

<hr>

## Installer DB

```php
require_once ('Db.php');
```

## Forbind til database

```php
// Generisk
$db_obj = new Db( "hostname", "username", "password", "database", "charset" );

// Praktisk
$db_obj = new Db( "localhost", "my_username", "my_password", "name_of_db", "utf8mb4" );
```
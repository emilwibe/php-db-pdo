# php-db-pdo

Example of a class that can be used wih a database. This is exclusively for educational purposes.

<hr>

- [php-db-pdo](#php-db-pdo)
  - [Install](#install)
  - [Connect to the database](#connect-to-the-database)

<hr>

## Install

```php
require_once ('Db.php');
```

## Connect to the database

```php
// Generic
$db_obj = new Db( "hostname", "username", "password", "database", "charset" );

// Practically
$db_obj = new Db( "localhost", "my_username", "my_password", "name_of_db", "utf8mb4" );
```
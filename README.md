# php-db-pdo

Example of a class that can be used wih a database. This is exclusively for educational purposes.

<hr>

- [php-db-pdo](#php-db-pdo)
  - [Install](#install)
  - [Instantiate database object](#instantiate-database-object)
  - [Connect to database](#connect-to-database)
  - [SELECT query](#select-query)
    - [SELECT with WHERE clause](#select-with-where-clause)

<hr>

## Install

```php
require_once ('Db.php');
```

## Instantiate database object

```php
// Generic
$db_obj = new Db( "hostname", "username", "password", "database", "charset" );

// Practically
$db_obj = new Db( "localhost", "my_username", "my_password", "name_of_db", "utf8mb4" );
```

## Connect to database

```php
$db_obj->db_connect();
```

## SELECT query

```php
// SELECT all (*)
$db_obj->get( "musicdb" );

// SELECT one column
$db_obj->get( "musicdb", "id" );

// SELECT muliple columns
$db_obj->get( "musicdb", [ "id", "artist", "track" ] );
```

### SELECT with WHERE clause
```php

// $where takes an array of arrays
$db_obj->get( "musicdb", "*", [["artist", "=", "'The Beatles"], ["year", "=", "1967"]] );
```
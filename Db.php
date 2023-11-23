<?php

/**
 * Db Class
 *
 * @category  Database Access
 * @package   Db
 * @author    Emil Wibe <mail@emilwibe.dk>
 * @license   https://www.gnu.org/licenses/lgpl-3.0.en.html
 * @link      http://github.com/emilwibe/php-db-pdo
 * @version   1.0.0
 */
class Db {
    /**
     * Database credentials
    */
    private $db_creds = [
        'type'      => 'mysql',
        'host'      => null,
        'username'  => null,
        'password'  => null,
        'dbname'    => null,
        'charset'   => null
    ];

    /**
     * Data Source Name
     */
    private $dsn;
    private $conn;

    private $query;

    public function __construct( $host = null, $username = null, $password = null, $dbname = null, $charset = null ){
        $this->db_creds['host'] = $host;
        $this->db_creds['username'] = $username;
        $this->db_creds['password'] = $password;
        $this->db_creds['dbname'] = $dbname;
        $this->db_creds['charset'] = $charset;

        $this->dsn = 'mysql:host=' . $this->db_creds['host'] . ';dbname=' . $this->db_creds['dbname'] . ';charset=' . $this->db_creds['charset'];
    }
    public function db_connect() {
        $this->conn = new PDO( $this->dsn, $this->db_creds['username'], $this->db_creds['password'] );
        $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $this->conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );
    }

    /**
     * @param string  $tableName The name of the database table to work with.
     * @param int|array $numRows Array to define SQL limit in format Array ($count, $offset)
     *                               or only $count
     * @param string $columns Desired columns
     * @return array Contains the returned rows from the select query.
     */
    public function get( $tableName, $columns = '*' ) {
        
        if (empty($columns)) {
            $columns = '*';
        }

        if ( is_array($columns) ) {
            $column = implode(', ', $columns);
        } else {
            $column = $columns;
        }

        $this->query = 'SELECT ' . $column . ' FROM ' . $tableName;

        $stmt = $this->conn->query( $this->query );

        return $stmt->fetchAll();
    }
}
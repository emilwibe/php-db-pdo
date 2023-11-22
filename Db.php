<?php

/**
 * Db Class
 *
 * @category  Database Access
 * @package   Db
 * @author    Emil Wibe <mail@emilwibe.dk>
 * @license   http://opensource.org/licenses/lgpl-3.0.html The GNU Lesser General Public License, version 3.0
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

    public function __construct( $host = null, $username = null, $password = null, $dbname = null, $charset = null ){
        $this->db_creds['host'] = $host;
        $this->db_creds['username'] = $username;
        $this->db_creds['password'] = $password;
        $this->db_creds['dbname'] = $dbname;
        $this->db_creds['charset'] = $charset;

        $this->dsn = 'mysql:host=' . $this->db_creds['host'] . ';dbname=' . $this->db_creds['dbname'] . ';charset=' . $this->db_creds['charset'];
    }
}
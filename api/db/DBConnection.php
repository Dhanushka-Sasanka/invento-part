<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dhanush
 * Date: 12/6/2018
 * Time: 9:42 PM
 */

class DBConnection
{
    private $host = "127.0.0.1";
    private $userName = "root";
    private $password = "1234";
    private $database = "testone";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
    }


    public function getConnection()
    {
        return $this->connection;
    }
}

<?php
namespace App;

use PDO;
use PDOException;

class Database
{
    protected string $dsn;
    protected string $username;
    protected string$password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=classicmodels';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect(): PDO
    {
        try {
            return new PDO($this->dsn,$this->username,$this->password);
        }catch (PDOException $PDOException) {
            echo 'Server error';
        }
    }
}
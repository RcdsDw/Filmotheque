<?php

namespace App\Lib\Database;

class Database
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=filmotheque;charset=utf8', 'root', 'root');
        }

        return $this->database;
    }
}

<?php


class BaseModel
{
    // Make a protected PDO variable
    protected PDO $pdo;

    // Make a connection to the database
    public function __construct()
    {
        try {
            // Define information needed to connect to database
            $this->pdo = new PDO('mysql:host=localhost;dbname=wfflix',
                'root',
                'root',
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            die(var_dump($e->getMessage()));
        }
    }
}

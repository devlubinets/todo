<?php

namespace engine;

use PDO;

class Db
{
    private static $instance;
    private PDO $pdo;


    private function __construct()
    {
        $dsn = 'mysql:dbname=' . DBNAME . ';host=' . HOST;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $this->pdo = new PDO($dsn, USER, PASS, $options );
    }

    public static function getInstance():Db
    {
        if(self::$instance === null) {
            self::$instance = new self;
        }
            return self::$instance;
    }

    public function sqlQuery(string $sql)
    {
        $stmt = $this->pdo->prepare($sql);
        if ($stmt->execute()) {
            while ($result = $stmt->fetch(PDO::FETCH_LAZY)) {
            echo '<br>'.$result->name;
        }
        }
    }

}
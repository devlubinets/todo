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

    public function create()
    {

    }

    public function query(string $table, string $col)
    {
        $stmt = $this->pdo->prepare("USE shop; SELECT $col FROM {$table};");
        $stmt->execute(); //array($column, $tbname)

        while ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo '<br>'.$result->name;
        }
    }

    public function read(string $tbname = '', string $column = '')
    {
        if($tbname === '' || $column === '') {
            //TODO надо логировать такие ситуации
            return;
        }
//        $stmt = $this->pdo->prepare('SELECT ? FROM ? ;');
        $stmt = $this->pdo->prepare('SELECT name FROM users_1;');
        $stmt->execute(); //array($column, $tbname)

        while ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo '<br>'.$result->name;
        }
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
}
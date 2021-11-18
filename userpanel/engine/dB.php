<?php

namespace userpanel\engine;

class dB
{
    private static $instance;
    private PDO $pdo;


    private function __construct()
    {
        $dsn = 'mysql:dbname=' . DBNAME . 'host=' . HOST;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $this->pdo = new PDO($dsn, USER, PASS, $options );
    }

    public static function getInstance():dB
    {
        if(self::$instance === null) {
            self::$instance = new self;
        }
            return self::$instance;
    }

    public function create()
    {

    }

    public function read(string $tbname = '', string $column = '')
    {
        $arr = [$tbname, $column];
        if($tbname === '' || $column === '') {
            //TODO надо логировать такие ситуации
            return;
        }
        $stmt = $this->pdo->prepare('SELECT ? FROM ? ');
        $stmt->execute($arr);

        while ($result = $stmt->fetch()) {
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
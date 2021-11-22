<?php

$task = $_POST['task'];
if($task == '') {
    echo 'Введите само задание';
} else {
    $dsn = 'mysql:host=localhost;dbname=to_do';
$pdo = new PDO($dsn,'root','12345678Ee!!');

$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /avada_media/todo/public');
}
<?php
$dsn = 'mysql:host=localhost;dbname=to_do';
$pdo = new PDO($dsn,'root','12345678Ee!!');

$id = $_GET['id'];
$sql = 'DELETE FROM `tasks` WHERE `id` =?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /avada_media/todo/public');
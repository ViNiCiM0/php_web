<?php

$dbPath = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$dbPath");

$id = $_GET['id'];
$sql = 'DELETE FROM videos WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(1, $id);

if($stmt->execute() === false){
    header('Location: index.php?sucesso=0');
}else{
    header('Location: index.php?sucesso=1');
}
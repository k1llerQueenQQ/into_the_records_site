<?php
$user_id = $_GET['id'];
$id=$_COOKIE["login"];

$Status=1;
    //DB
    require 'db.php';
    //INSERT
    $sql = 'INSERT INTO friends(UserId) VALUES(?)';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header('Location:/index.php');

?>



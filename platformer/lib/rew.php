<?php
$Name = trim(filter_var($_POST['Name'], FILTER_SANITIZE_SPECIAL_CHARS));
$Text = trim(filter_var($_POST['Text'], FILTER_SANITIZE_SPECIAL_CHARS));


    //DB
    require 'db.php';

    //INSERT
    $sql = 'INSERT INTO reviews(Name, Review) VALUES(?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$Name, $Text]);
    header('Location: /');
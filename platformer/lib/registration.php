<?php
$Email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password2 = trim(filter_var($_POST['password2'], FILTER_SANITIZE_SPECIAL_CHARS));
$Login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));

if ($Password == $Password2 && isset($_POST['UA']) && $_POST['UA'] == 'Yes') {



    //DB
    require 'db.php';
    //INSERT
    $sql = 'INSERT INTO users(Email, Password, Login) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$Email, $Password, $Login]);

    header('Location:/index.php');
} else {
    echo 'Ошибка данных';
}
?>



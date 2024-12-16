<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php" ?>

        <div class="hero container">
            <div class="hero--info">

                
                <h2></h2>
            </div>

        </div>
    </div>
    <?php
    $user_id = $_GET['id'];
    $conn = new PDO('mysql:host=localhost;dbname=records;port=3307;charset=utf8mb4', 'root', 'root');
    $sql = "SELECT * FROM `users` 
            WHERE `users`.`Id`= '{$user_id}'";
    $result = $conn->query($sql); ?>
    <h1>Рекорды пользователя<? echo "<h1>" . $row2=$result->fetch()["Login"] ."<h1>";
    ?>
    </h1>
    <?php
    $user_id = $_GET['id'];
    $conn = new PDO('mysql:host=localhost;dbname=records;port=3307;charset=utf8mb4', 'root', 'root');
    $sql = "SELECT * FROM `records` 
            INNER JOIN `users`
            ON `records`.`UserId`=`users`.`Id`
            WHERE `users`.`Id`= '{$user_id}'";
    $result = $conn->query($sql); ?>
    
    <?
    echo "<table><tr><th>Время</th><th>Монетки</th><th>Ползователь</th>";
    while ($row = $result->fetch()) {
        echo "<tr>";

        echo "<td>" . $row["Time"] . "</td>";
        echo "<td>" . $row["Coins"] . "</td>";
        echo "<td>" . $row["Login"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    

    ?>
    <div class="login">
            <div class="container">
                <form method="post" >
                    <div class="inline">
                    <button type="submit"><a href = 'lib\addfriend.php'>Добавить в друзья</a></button>
                        <button type="submit"><a href = 'inprogress.php'>Написать сообщение</a></button>
    
</body>


</html>
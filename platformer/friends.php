<!DOCTYPE html>
<html lang="en">
<?
$a=$_COOKIE["login"]?>
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
    </h1>
    <?php
    $user_id = $_GET['id'];
    $conn = new PDO('mysql:host=localhost;dbname=records;port=3307;charset=utf8mb4', 'root', 'root');
    $sql = "SELECT * FROM friends
LEFT JOIN `users`
ON  `friends`.`UserFriend`=`users`.`Id`
WHERE `Login`='".$a."'";
$result = $conn->query($sql); 

    ?>
    
    <?
    echo "<table><tr><th>Ник</th><th>Ссылка</th>";
    while ($row = $result->fetch()) {
        echo "<tr>";
        echo "<td>" . $row["$row[Login]"] . "</td>";
        echo "<td><a href='id{$row["UserId"]}'}</a>link<td>";
        echo "</tr>";
    }
    echo "</table>";
    

    ?>
    <div class="login">
            <div class="container">
                <form method="post" >
                    <div class="inline">
                    
    
</body>


</html>
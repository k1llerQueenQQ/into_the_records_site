<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<?
$a2 = $_COOKIE["login"];

?>
<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php" ?>

        <div class="info">
            <div class="container">
                <h1>Рекорды</h1>
                <?php
                    try {
                        $conn = new PDO('mysql:host=localhost;dbname=records;port=3307;charset=utf8mb4','root', 'root');
                        $sql = "SELECT * FROM `records` 
                                INNER JOIN `users`
                                ON `records`.`UserId`=`users`.`Id`
                                ORDER BY `records`.`Time` ASC";
                        $result = $conn->query($sql);
                        echo "<table><tr><th>№</th><th>Время</th><th>Монетки</th><th>Пользователь</th><th>Ссылка</th>";
                        $i=1;
                        while ($row = $result->fetch()) {
                            
                                echo "<tr>";
                                echo"<td>". $i++ ."</td>";
                                echo "<td>" . $row["Time"] . "</td>";
                                echo "<td>" . $row["Coins"] . "</td>";
                                echo "<td>" . $row["Login"] . "</td>";
                                echo "<td><a href='id{$row["Id"]}'}</a>link<td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                    }
                    catch (PDOException $e) {
                        echo "Database error: " . $e->getMessage();
                    }
                ?>
            </div>
        </div>
    </div>
</body>


</html>
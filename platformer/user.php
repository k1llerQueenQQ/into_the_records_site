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
        <form method="post" action="login.php">
            <div class="login">
                <div class="container">
                    <h1>Кабинет пользователя
                        <p>Привет: <b><?= $_COOKIE['login'] ?></b></p>
                    </h1>
                    <button type="submit">Выйти из профиля</button>

                </div>
                <?
            if($_COOKIE['TypeOfAcc']==1){?>
                <button><a href = "/editor.php">>Мои рекорды</a></button>
            <?}
                ?>
            </div>
            <div class="hero container">
            </div>
        </form>
       
    </div>
</body>

</html>
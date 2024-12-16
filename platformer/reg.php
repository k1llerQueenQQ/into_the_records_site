<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing simulator</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php" ?>

        <div class="login">
            <div class="container">
                <h1>Регистрация</h1>
                <form method="post" action="lib/registration.php">
                    <div class="inline">
                        <div>
                            <input type="email" name="email" placeholder="E-mail">
                        </div>
                        <div>
                            <input type="login" name="login" placeholder="Login">
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Пароль">
                        </div>
                        <div>
                            <input type="password" name="password2" placeholder="Повторите пароль">
                        </div>
                        <div>
                            <input type="checkbox" value="Yes" name="UA" />
                        </div>
                        <div><a>Принимаю условия пользовательского соглашения</a></div>
                        <button type="submit">Регистрация</button>
                        <div><a href="login.php">Уже есть аккаунт? Ввойдите</a>
                        </div>



                    </div>
                </form>
            </div>

        </div>
        <div class="hero container">
        </div>

    </div>
</body>


</html>
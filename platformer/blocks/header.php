<header class="container">
    <h3 class="logo">records<SleepFix</h3>
    <nav>
        <ul>
            
            <li class="active"><a href="index.php">Главная</a></li>
            <li><a href="tracker.php">Рекорды</a></li>
            <li><a href="friends.php">Друзья</a></li>
            <?php
            if (isset($_COOKIE['login']))
                echo '<li class="btn"><a href="user.php">Профиль</a></li>';
            else {
                echo '<li class="btn"><a href="login.php">Регистрация</a></li>';

            }
            ?>

        </ul>
    </nav>
</header>
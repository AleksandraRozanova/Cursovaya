<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset = "UTF-8">
        <?php echo '<title>'.$name = 'Найдите свою силу!'.' </title>'
        ?>
        <link rel = "stylesheet" href="style.css">
    </head>
    <body>
        <header class = "header">
            <div class="container">
                <nav class="main-menu">
                <a class = "navigation" href="
                <?php
                        $text='Главная';
                        $ref='index.php';
                        echo $ref;                    
                    ?>"

                    ><?= $text?></a>
                    <a href="<?php
                        $text='Список залов';
                        $ref='list.php';
                        echo $ref;
                    ?>"
                    class = "navigation"><?= $text?></a>
                    <a href="<?php
                        $text='Поиск по категориям';
                        $ref='categories.php';
                        echo $ref;
                    ?>"
                    class = "navigation"><?= $text?></a>
                    <a  href="<?php
                        $text='Залы на карте';
                        $ref='map.php';
                        $current=true;
                        echo $ref;
                    ?>"
                    <?php
                        if($current) echo ' id="underline"';
                    ?>
                    class = "navigation"><?= $text?></a>
                </nav>   
                <div class="text-center py-5">
                <h1 class="name">Найдите свою силу!</h1>
                </div>
            </div>   
        </header> 


    <main>
        <div class="container">
        <iframe src="https://www.google.com/recaptcha/api2/bframe?hl=ru&v=TDBxTlSsKAUm3tSIa0fwIqNu&k=6LeskyIUAAAAACYtTk4y9h8QwNYDWzXdoPAp6m9h"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <p>
            Вы можете найти удобные для Вас залы, воспльзовавшись картой!
</p>
            </div>
    </div>
    
    </main>
    <footer class="footer"> 
        <div class="container">
        &copy; Розанова А.А.
        </div>
    </footer>
    </body>
</html>
    
     
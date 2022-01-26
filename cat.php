<!doctype html>
<html>
    <head>
    <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatiblr" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial-">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=<1cd6e46c-c95e-407f-aaed-d53fc1161329&lang=ru_RU>" type="text/javascript"></script>
        <?php echo '<title>'.$name = 'Найдите свою силу!'.' </title>'
        ?>
        <link rel = "stylesheet" href="style.css">
    </head>
    <body>
    <body>
        <header class = "header">
        <div class="container">
                <nav class="main-menu">
                    <a class = "navigation" href="
                    <?php
                        $text='Главная';
                        $ref='index.php';
                        $current=true;
                        echo $ref;                    
                    ?>"
                    <?php
                        if($current) echo ' id="underline"';
                    ?>

                    ><?= $text?></a>
                    <a href="<?php
                        $text='Список залов';
                        $ref='page.php';
                        echo $ref;
                    ?>"
                    class = "navigation"><?= $text?></a>
                    <a href="<?php
                        $text='Поиск информации о зале';
                        $ref='cat.php';
                        echo $ref;
                    ?>"
                    class = "navigation"><?= $text?></a>
                    <a  href="<?php
                        $text='Залы на карте';
                        $ref='map_1.php';
                        echo $ref;
                    ?>"
                    class = "navigation"><?= $text?></a>
                </nav>   

                <div class="text-center py-5">
                <h1 class="name">Найдите свою силу!</h1>
                </div>
            </div>   
        </header> 
        <main>
        <div id="container">
            <form method="POST" action="search.php" class="">
                    <label>Введите название зала</label>
                    <input type="text" name="gym" />
                    <button type="submit" class="btn">Показать данные</button>
                </form>
                <?=$content?>

            </div>
</main>
<footer class="footer"> 
        <div class="container">
        &copy; Розанова А.А.
           <?php
           date_default_timezone_set("Europe/Moscow");
           echo '<p>Сформированно:'.date("d.m.y в H-i.s").'<p>';
           ?>
           </div>
    </footer>

    </body>
</html>
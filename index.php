<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatiblr" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial-">
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
                        $current=true;
                        echo $ref;                    
                    ?>"
                    <?php
                        if($current) echo ' id="underline"';
                    ?>

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
    <div class="container">
                      <p>
                      Тут будет текст описывающий нашу компанию, но об этом немного позже.   
</p>
<?=$content?>
<div class="text-right">
                <a class="btn" href="page.php">Список всех залов</a>
            </div>
            </div>
    </div>
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
    
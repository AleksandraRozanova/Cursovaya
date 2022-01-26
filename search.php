<?php
    require("connectdb.php");
    
    $result = mysqli_query($connect, "SELECT * FROM `0` WHERE ObjectName= '".$_POST["gym"]."' LIMIT 1");

    if(!$result || mysqli_num_rows($result) == 0){
        $content = "В базе данных нет страниц.";
    } else {
        $content .= "<div id=\"map\" class=\"map\">
            <script type=\"text/javascript\">
            ymaps.ready(init);
            function init() {
            var myMap = new ymaps.Map('map', {
                center: [55.755435772455264, 37.61215424334314],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            });
            myMap.geoObjects";
        while($page = mysqli_fetch_assoc($result)){
            $content .= ".add(new ymaps.Placemark([".$page["geodata_center_long"].", ".$page["geodata_center_lat"]."], {
                balloonContent: '".$page["ObjectName"]."'
                },{
                    preset: 'islands#redSportIcon'
                    }));}</script>";
        $content .= "<p><b>Название тренажерного зала: </b>".$page["ObjectName"].", <b>Адрес: </b>".$page["Address"].", <b>Сайт: </b><a href=\"http://".$page["WebSite"]."\">".$page["WebSite"]."</a></p>";

       
        }   
        $content .= "
        </div>"; 
            }
    require("cat.php");
?>
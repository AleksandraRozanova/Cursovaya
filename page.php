<?php
    require("connectdb.php");
    
    $result = mysqli_query($connect, "SELECT * FROM `0` ORDER BY ObjectName ASC");

    if(!$result || mysqli_num_rows($result) == 0){
        $content = "В базе данных нет страниц.";
    } else {
        while($page = mysqli_fetch_assoc($result)){
        $content .= "<p><b>Название тренажерного зала: </b>".$page["ObjectName"].", <b>Адрес: </b>".$page["Address"].", <b>Сайт: </b><a href=\"http://".$page["WebSite"]."\">".$page["WebSite"]."</a></p><hr>";  
        }          
    }
    require("index.php");
?>
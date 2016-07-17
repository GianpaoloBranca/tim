<?php
    $url = $_GET['url'];
    for($i = 0; $i < 4; $i++){
        $path = 'img/d_'.$url.'_'.$i.'.jpg';
        if (file_exists($path) ){
            echo ("<img src='".$path."' width='100%' onclick='changeMainPhoto(\"".$path."\")' />");
        }
    }
?>
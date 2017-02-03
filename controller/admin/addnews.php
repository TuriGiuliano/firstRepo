<?php
    if(isset($_POST['submit'])){
        if(addNewsGetBool()){
            echo "Статья загружена";
        }
        else echo "Ошибка! Не удалось загружить статью";
    }
    else {
        $categories = getArrNewsCat();
        include_once ROOT_PATH . "/view/admin/addnews.php";
    }
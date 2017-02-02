<?php
    include_once ROOT_PATH . "/module/admin/functions.php";
    if ($controllerName[1] == "addnews") {
        include_once ROOT_PATH . "/controller/admin/addnews.php";
    }
    else{
        header('Location: /404/');
    }
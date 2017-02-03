<?php
    include_once ROOT_PATH . "/module/admin/functions.php";
    if (is_null($controllerName[1])) {
        include_once ROOT_PATH . "/view/admin/index.php";
    }
    elseif ($controllerName[1] == "deletenews") {
        include_once ROOT_PATH . "/controller/admin/deletenews.php";
    }
    elseif ($controllerName[1] == "addnews") {
        include_once ROOT_PATH . "/controller/admin/addnews.php";
    }
    else{
        header('Location: /404/');
    }
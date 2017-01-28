<?php

    // Разбивает URL после домена в массив, возвращает его.
function getQueryUrl(){
    $queryUrl = mb_substr($_SERVER['REQUEST_URI'], 1);
    if ($queryUrl[0] === ""){
        return false;
    }
    else {
        $queryArr = explode('/', $queryUrl);
        return $queryArr;
    }
}
    // Конец функции

    // Возвращает URL требуемого контроллера
function getControllerUrl(){
    if ($query = getQueryUrl()) {
        switch ($query[0]) {
            case "news":
                return "news"; break;
            case "gallery":
                return "gallery"; break;
            case "404":
                return "404";break;
            default: header('Location:/404/');
        }
    }
    else return "index";
}
?>
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
                return __DIR__ . "/controller/news.php"; break;
            case "gallery":
                return __DIR__ . "/controller/gallery.php"; break;
            case "404":
                return __DIR__."/controller/404.php";break;
            default: header('Location:/404/');
        }
    }
    else return __DIR__ . "/controller/index.php";
}
?>
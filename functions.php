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
function getControllerUrl($query){
    if ($query = getQueryUrl()) {
        switch ($query[0]) {
            case "news":
                echo __DIR__ . "/controller/news.php"; break;
            case "gallery":
                echo __DIR__ . "/controller/gallery.php"; break;
            default: echo "Ошибка 404. Страница не найдена";
        }
    }
    else echo "Главная страница";
}
?>
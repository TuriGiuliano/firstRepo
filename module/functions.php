<?php

    // Разбивает URL после домена в массив, возвращает его.
function getQueryUrl(){
    $queryUrl = mb_substr($_SERVER['REQUEST_URI'], 1);
    if ($queryUrl[0] === ""){
        return false;
    }
    else {
        $queryArr = explode('/', $queryUrl);
        if (end($queryArr) == ""){
            unset(end($queryArr));
        }
        return $queryArr;
    }
}
    // Конец функции

    // Возвращает URL требуемого контроллера
function getControllerUrl(){
    if ($query = getQueryUrl()) {
        switch ($query[0]) {
            case "news":
                return $query; break;
            case "gallery":
                return $query; break;
            case "404":
                return "404";break;
            default: header('Location:/404/');
        }
    }
    else return "index";
}
    // Конец функции

    // Подключается к БД, возвращает $mysqli или false.
function connectDB(){
     $mysqli = new mysqli(
        "sql8.freemysqlhosting.net",
        "sql8156306",
        "MZVSp2Y3Zf",
        "sql8156306"
    );
    if ($mysqli->connect_errno === 0){
        $mysqli->set_charset("utf8");
        return $mysqli;
    }
    else return false;
}

define("ROOT_PATH",$_SERVER['DOCUMENT_ROOT']);
?>
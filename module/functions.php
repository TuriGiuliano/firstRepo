<?php

        // Разбивает URL после домена в массив, возвращает его.
    function getQueryUrl(){
        $queryUrl = mb_substr($_SERVER['REQUEST_URI'], 1);
        if ($queryUrl[0] === ""){
            return false;
        }
        else {
            $queryArr = explode('/', $queryUrl);
            if (end($queryArr) === ""){
                unset($queryArr[count($queryArr)-1]);
            }
            return $queryArr;
        }
    }
        // Конец функции

        // ЯДРО. Возвращает имя Файла требуемого контроллера.
    function getControllerUrl(){
        if ($query = getQueryUrl()) {
            switch ($query[0]) {
                case "news":
                    return $query; break;
                case "gallery":
                    return $query; break;
                case "admin":
                    $query[0] = "admin";
                    return $query; break;
                case "404":
                    $query[0] = "404";
                    return $query; break;
                default:
                    header('Location: /404/');
                    break;
                    /*$query[0] = "404";
                    return $query; break;*/
            }
        }
        else {
            $query[0] = "index";
            return $query;
        }
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
        // Конец функции

        // Подключается к БД, возвращает название категории.
    function getCategoryName($mysqli, $controllerName) {
        $queryRes = $mysqli->query("SELECT `name` FROM `titels` WHERE `controller` = '". $controllerName[0]."'");
        $res = $queryRes->fetch_assoc();
        return $res['name'];
    }
        // Конец функции

    define("ROOT_PATH",$_SERVER['DOCUMENT_ROOT']); // Константа корня сайта

        // Реализует блок "Хлебные крошки" или фолс
    function getBread($mysqli, $controllerName){
        if ($controllerName[0] != "index") {
            $bread = array($controllerName[0], getCategoryName($mysqli, $controllerName));
            return $bread;
        }
        else return false;
    }
        // Конец функции
?>
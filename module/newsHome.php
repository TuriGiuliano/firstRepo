<?php
    $mysqli = connectDB();
    function getArticleArr($mysqli){
        $query = "SELECT * FROM `news`";
        $res = $mysqli->query("$query");
        for($i=0;$i < $res->num_rows;$i++) {
            $article[] = $res->fetch_assoc();
        }
        return $article;
    }

    function getArticleForPage($mysqli,$controllerName){
        $query = "SELECT * from `news` WHERE `id` = '".$controllerName[1]."'";
        $res = $mysqli->query($query);
        $res = $res->fetch_assoc();
        return $res;
}


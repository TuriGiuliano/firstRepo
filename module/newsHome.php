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

    $article = getArticleArr($mysqli);
<?php
    require_once(ROOT_PATH . "/module/newsHome.php");
    if(count($controllerName) == 1) {
        $article = getArticleArr($mysqli);
        require_once(ROOT_PATH . "/view/news.php");
    }
    if(count($controllerName) == 2){
        $article = getArticleForPage($mysqli, $controllerName);
        require_once(ROOT_PATH . "/view/article.php");
    }
?>
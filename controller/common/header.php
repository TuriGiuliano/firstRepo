<?php
    $title = getCategoryName($mysqli, $controllerName);
    include ROOT_PATH . '/module/MenuHor.php';
    $menuHor = MenuHor();
    $bread = getBread($mysqli,$controllerName);
    include ROOT_PATH . '/view/header.php';
?>

<?php
    header('Content-Type: text/html; charset=utf-8');
    require_once __DIR__ . '/module/functions.php';
    $mysqli = connectDB();
    $controllerName = getControllerUrl();
    require_once __DIR__ . '/controller/main.php';
?>
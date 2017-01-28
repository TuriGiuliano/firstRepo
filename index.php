<?php
    require_once __DIR__ . '/functions.php';
    $controlName = getControllerUrl();
    require_once __DIR__ . '/controller/' . $controlName . '.php';
?>
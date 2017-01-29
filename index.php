<?php
    $test = ['one'=>'one', 'two'=>'two'];
    require_once __DIR__ . '/functions.php';
    $controllerName = getControllerUrl();
    require_once __DIR__ . '/controller/' . $controllerName . '.php';
    ?>
<?php
    if($controllerName[0] != "admin") {
        require_once(ROOT_PATH . "/controller/common/header.php");
        require_once(ROOT_PATH . "/controller/basic/" . $controllerName[0] . ".php");
        require_once(ROOT_PATH . "/controller/common/footer.php");
    }
    else {
        require_once(ROOT_PATH . "/controller/admin/index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
        <title><?=$title?></title>
    <link rel="stylesheet" href="/view/css/style.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <img src="/view/img/logo.png" alt="firstRepo">
            </div>
        </div>
        <div class="menuPattern"><div class="menu">
                <?php foreach ($menuHor as $key => $value){?>
                    <a href="<?=$value?>">
                        <div class="par">
                                <?=$key?>
                        </div>
                    </a>
                    <?php } ?>
            </div>
        </div>
        <div class="container">
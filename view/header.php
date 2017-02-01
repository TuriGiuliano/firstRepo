<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
        <title>
            <?=$title . " :: firtRepo "?>
        </title>
    <link rel="stylesheet" href="/view/css/style.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <a href="/">
                <div class="logo">
                    <img src="/view/img/logo.png" alt="firstRepo">
                </div>
            </a>
        </div>
        <div class="menuPattern">
            <div class="menu">
                <?php foreach ($menuHor as $key => $value){?>
                    <a href="<?=$value?>">
                        <div class="par">
                                <?=$key?>
                        </div>
                    </a>
                    <?php } ?>
            </div>
        </div>
        <?php if ($bread){?>
            <div class="bread">
                <a href="/">
                    Главная
                </a>
                >
                <a href="/<?=$bread[0]?>">
                    <?=$bread[1]?>
                </a>
            </div>
        <?php } ?>
        <div class="container">

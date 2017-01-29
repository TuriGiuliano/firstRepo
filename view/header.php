<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <link rel="stylesheet" href="/view/css/style.css" type="text/css">
</head>
<body>
<div class="header"></div>
<div class="menu">
    <?php foreach ($menuHor as $key => $value){?>
        <a href="<?=$value?>">
            <div class="par">
                <?=$key?>
            </div>
        </a>
        <?php } ?>
</div>
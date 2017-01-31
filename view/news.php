<h1><?=$title?></h1>
<?php for($i=0;$i < count($article);$i++){?>
    <h2><?=$article[$i]['title']?></h2>
    <p><?=$article[$i]['category']?></p>
    <p><img src="/view/img/news/<?=$article[$i]['img']?>"/></p>
    <p><?=$article[$i]['article']?></p>
<?php } ?>

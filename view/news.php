<!--<h1><?/*=$title*/?></h1>-->
<?php for($i=0;$i < count($article);$i++){?>

        <div class="articleBlock">
            <div class="articleHeadBlock">
                <div class="articleTitle">
                    <a href="/news/<?=$article[$i]['id']?>">
                        <h3>
                            <?=$article[$i]['title']?>
                        </h3>
                    </a>
                </div>
                <div class="articleCategory">
                    <?=$article[$i]['category']?>
                </div>
            </div>
            <a href="/news/<?=$article[$i]['id']?>">
                <div class="articleImg" style="background-image:url(/view/img/news/<?=$article[$i]['img']?>)">
            </a>
            </div>
            <a href="/news/<?=$article[$i]['id']?>">
            <div class="article">
                <p>
                    <?=$article[$i]['short']?>...
                </p>
            </div>
                </a>
        </div>

<?php } ?>

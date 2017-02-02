<?php
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $short = $_POST['short'];
        $article = $_POST['article'];
        $img = $_FILES['img']['name'];
        $cat = $_POST['categories'];
        if($_FILES['img']['size'] != 0){
            $path = ROOT_PATH . "/view/img/news/" . ($_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $path);
        }
        $query = "INSERT INTO `news`(`date`, `time`, `title`, `category`, `short`, `article`, `img`) VALUES ('".date('d.m.y')."','".date('G:i')."','$title','$cat','$short','$article','$img')";
        //($query);
        $resque = $mysqli->query($query);
        var_dump($resque);die;
    }
    else {
        $categories = getArrNewsCat();
        include_once ROOT_PATH . "/view/admin/addnews.php";
    }
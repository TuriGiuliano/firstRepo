<?php
    function getArrNewsCat(){
        global $mysqli;
        $res = $mysqli->query('SELECT * FROM `newsCategory`');
        $arrayCat = [];
        for($i=0;$i < $res->num_rows;$i++){
            $fetch = $res->fetch_array();
            $arrayCat[] = $fetch['name'];
        }
    return $arrayCat;
    }

    function addNewsGetBool(){
        global $mysqli;
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
        $resque = $mysqli->query($query);
        return $resque;
    }

    function getArticleTitleAndID() {
        global $mysqli;
        $titleIdArr = [];
        $query = "SELECT `id`,`title` FROM `news`";
        $res = $mysqli->query($query);
        for($i=0;$i < $res->num_rows;$i++) {
            $resque = $res->fetch_array();
            $titleIdArr[$i] = [$resque];
        }
        return $titleIdArr;
    }
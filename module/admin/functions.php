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
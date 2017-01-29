<?php
// Возвращает ассоц. массив с Меню.
function MenuHor(){
    if ($mysqli = connectDB()) {
        $menuArr = [];
        $res = $mysqli->query("SELECT * FROM `menu`");
        for ($i = 0; $i < $res->num_rows; $i++) {
            $string = $res->fetch_assoc();
            $menuArr[$string['name']] = $string['link'];
        }
        return $menuArr;
    }
}
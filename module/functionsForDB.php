<?php
function connectDB(){
    $mysqli = new mysqli(
        "localhost",
        "root",
        "firstRepo",
        ""
    return $mysqli;
    );
}
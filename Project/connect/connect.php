<?php
    $host = "localhost";
    $user = "seongwoo4477";
    $pass = "Parkseongwoo!!1"; 
    $db = "seongwoo4477";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    //if(mysqli_connect_errno()){
    //    echo "DATABASE Connect False";
    //} else {
    //    echo "DATABASE Connect True";
    //}
?>
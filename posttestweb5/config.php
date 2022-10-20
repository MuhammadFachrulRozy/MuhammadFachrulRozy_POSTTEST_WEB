<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sneakers_store";
    $db = mysqli_connect($hostname,$username,$password,$database);
    
    if(!$db){
    echo "Koneksi tidak terhubung";
    }
?>
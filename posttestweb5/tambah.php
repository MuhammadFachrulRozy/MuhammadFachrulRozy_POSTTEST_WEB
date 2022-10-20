<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $nama_sneakers = $_POST['nama_sneakers'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
  
        $query = mysqli_query($db,"INSERT INTO sneakers (nama_sneakers,harga,jumlah) VALUES ('$nama_sneakers','$harga','$jumlah')");
        if($query){
            header("Location:admin.php");
        } else {
            echo "Add Error";
        }
    }
?>
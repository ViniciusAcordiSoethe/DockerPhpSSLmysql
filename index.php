<?php 
    $conect = mysqli_connect("mysql", "root", "root", "sys");

    if($conect->connect_error){
        die("Connection failed: " . $conect->connect_error);
    }

    echo "Conectou";
?>
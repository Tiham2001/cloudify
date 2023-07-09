<?php 
    $server = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "music_db";
$conn= new mysqli($server, $username, $password, $dbname)or die("Could not connect to mysql".mysqli_error($con));

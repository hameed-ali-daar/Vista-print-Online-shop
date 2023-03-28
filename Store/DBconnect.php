<?php

$servername="localhost";
$user="root";
$password="";
$DBname="store";

$conn = mysqli_connect($servername, $user, $password, $DBname);
    if (!$conn){
        die("connection failed". mysqli_connect_error());
    }
?>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$database  = "mahasiswa";


$connection = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
    die("Failed To Connection");
}
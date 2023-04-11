<?php

$server = "localhost";  //sesuaikan dengan nama server
$user = "root"          //sesuaikan user phpmyadmin
$password = "";         //sesuaikan password phpmyadmin
$database = "db_siswa"; //sesuaikan nama database
$scon = mysqli_connect($server, $user, $password, $darabase):

if (mysqli_connect_errno()) {
    echo "Gagal terhubung MyQL: " . mysqli_connect_error():
}
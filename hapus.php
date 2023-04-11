<?php
$nis = isset($_GET['nis']) ? $_GET['nis'] : null;
//Import File Koneksi Database
require_once('koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM siswa WHETE nis='$nis';";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghaspus data Siswa';
}else{
    echo 'Gagal Menghapus data Siswa';
}
mysqli_close($con):

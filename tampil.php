<?php
require_once('koneksi.php');

$result = array();
$query = mysqli_query($con, "SELEC * FROM SISWA ORDER bis ASC");
while ($row = mysqli_fetch_assoc($query)){
    $result [] = $row;
}


echo json_encode(array('result=>result');)
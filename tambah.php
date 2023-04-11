<?php ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Mendapat Nilai Variable
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kelas'];
    //Pembuatan Syntax SQL
    $sql = "INSERT INTO siswa (nis, nama, jk, kelas)
            VALUES ('$nis', '$nama', '$jk', '$kelas')";
    //Improt File Koneksi Database
    require_once('koneksi.php');
    //Eksekusi Query database
    if (mysqli_query($con, $sql)) {
        echo 'Berhasil Menambahkan Siswa';
    } else {
        echo 'Gagal Menambahkan Siswa';
    }
    mysqli_close($con);
}
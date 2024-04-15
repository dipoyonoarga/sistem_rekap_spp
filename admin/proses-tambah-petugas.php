<?php

$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

// panggil koneksi 
include '../koneksi.php';
$sql = "INSERT INTO petugas(username,password,nama_petugas,level) VALUES('$username','$password', '$nama_petugas','$level')";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=petugas");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=petugas');</script>";
}

<?php

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

// panggil koneksi 
include '../koneksi.php';
$sql = "INSERT INTO spp(tahun,nominal) VALUES('$tahun','$nominal')";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=spp");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=spp');</script>";
}

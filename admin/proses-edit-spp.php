<?php

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
// tangkap dulu
$id_spp = $_GET['id_spp'];

// panggil koneksi 
include '../koneksi.php';
$sql = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp ='$id_spp'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=spp");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=spp');</script>";
}

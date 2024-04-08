<?php

// tangkap dulu
$id_kelas = $_GET['id_kelas'];

// panggil koneksi 
include '../koneksi.php';
$sql = "DELETE FROM kelas WHERE id_kelas ='$id_kelas'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=spp');</script>";
}

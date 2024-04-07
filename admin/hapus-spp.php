<?php

// tangkap dulu
$id_spp = $_GET['id_spp'];

// panggil koneksi 
include '../koneksi.php';
$sql = "DELETE FROM spp WHERE id_spp ='$id_spp'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=spp");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=spp');</script>";
}

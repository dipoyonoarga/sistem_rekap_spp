<?php
$id_petugas = $_GET['id_petugas'];

// panggil koneksi 
include '../koneksi.php';
$sql = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=petugas");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=petugas');</script>";
}

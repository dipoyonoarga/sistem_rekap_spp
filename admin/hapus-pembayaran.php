<?php

// tangkap dulu
$id_pembayaran = $_GET['id_pembayaran'];

// panggil koneksi 
include '../koneksi.php';
$sql = "DELETE FROM pembayaran WHERE id_pembayaran ='$id_pembayaran'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    echo "<script>window.history.go(-1);</script>";
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.history.go(-1);</script>";
}

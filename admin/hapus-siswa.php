<?php

// Masukkan komponen satu persatu
$nisn = $_GET['nisn'];



// panggil koneksi 
include '../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=siswa");
} else {
    echo "<script>alert('Maaf Data Tidak Terhapus'); 
    window.location.assign('?url=siswa');</script>";
}

<?php

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
// tangkap dulu
$id_kelas = $_GET['id_kelas'];

// panggil koneksi 
include '../koneksi.php';
$sql = "UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' 
WHERE id_kelas ='$id_kelas'";
// treble query
$query = mysqli_query($koneksi, $sql);

// cek koneksi
if ($query) {
    header("Location:?url=kelas");
} else {
    echo "<script>alert('Maaf Data Tidak Tersimpan'); 
    window.location.assign('?url=kelas');</script>";
}

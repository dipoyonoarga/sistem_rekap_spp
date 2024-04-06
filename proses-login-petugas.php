<?php
// tangkap info yang diperlukan
$username = $_POST['username'];
$password = $_POST['password'];

// include koneksi
include 'koneksi.php';
// bahasa sql : dari tabel petugas username dan password disamakan
$sql = "SELECT*FROM petugas WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
// cek koneksi
if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];
    // verifikasi username dan password
    if ($data['level'] == 'admin') {
        header('Location:admin/admin.php');
    } else if ($data['level'] == 'petugas') {
        header('Location:petugas/petugas.php');
    }
} else {
    echo "<script>
    alert('Login gagal, silakan coba lagi');
    window.location.assign('index2.php');
    </script>";
}

<?php
// mencegah pengguna langsung akses halaman admin tanpa login
session_start();
if (empty($_SESSION['nisn'])) {
    echo "<script>
        alert('Maaf anda belum login');
        window.location.assign('../index.php');
        </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Sistem Pembayaran SPP</title>
    <!-- Memanggil bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Sistem Pembayaran SPP.</h3>
        <div class="alert alert-info">
            Anda login sebagai Siswa <b><?= $_SESSION['nama'] ?></b> sistem pembayaran SPP
        </div>
        <!--tombol navigasi-->
        <a href="siswa.php" class="btn btn-primary">Siswa</a>
        <a href="siswa.php?url=logout" class="btn btn-primary">Logout</a>

        <!--isi website-->
        <div class="card mt-2">
            <div class="card-body">
                <!--ini isi web kita, main php -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Siswa.</h4>";
                    echo "Sistem pembayaran spp digunakan untuk mempermudah rekap data pembayaran spp yang dilakukan oleh siswa";
                    echo "<hr>";
                    include 'history-pembayaran.php';
                } else {
                    include $file . '.php';
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Memanggil J Query -->
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>
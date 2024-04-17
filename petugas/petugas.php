<?php
// mencegah pengguna langsung akses halaman admin tanpa login
session_start();
if ($_SESSION['level'] != 'petugas') {
    echo "<script>
        alert('Maaf anda bukan sesi admin');
        window.location.assign('../index2.php');
        </script>";
}

if (empty($_SESSION['id_petugas'])) {
    echo "<script>
        alert('Maaf anda belum login');
        window.location.assign('../index2.php');
        </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Sistem Pembayaran SPP</title>
    <!-- Memanggil bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Sistem Pembayaran SPP.</h3>
        <div class="alert alert-info">
            Anda login sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> sistem pembayaran SPP
        </div>
        <!--tombol navigasi-->
        <a href="petugas.php" class="btn btn-primary">Petugas</a>
        <a href="petugas.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
        <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

        <!--isi website-->
        <div class="card mt-2">
            <div class="card-body">
                <!--ini isi web kita, main php -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Petugas.</h4>";
                    echo "Sistem pembayaran spp digunakan untuk mempermudah rekap data pembayaran spp yang dilakukan oleh siswa";
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
<?php
// mencegah pengguna langsung akses halaman admin tanpa login
session_start();
if ($_SESSION['level'] != 'admin') {
    echo "<script>
        alert('Maaf anda bukan sesi admin');
        window.location.assign('../index2.php');
        </script>";
}

if (empty($_SESSION['id_petugas'] != 'admin')) {
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
    <title>Admin - Sistem Pembayaran SPP</title>
    <!-- Memanggil bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h3>Sistem Pembayaran SPP.</h3>
        <div class="alert alert-info">
            Anda login sebagai <b>ADMIN</b> sistem pembayaran SPP
        </div>
        <!--tombol navigasi-->
        <a href="admin.php" class="btn btn-primary">Admin</a>
        <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
        <a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
        <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
        <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
        <a href="admin.php?url=laporan" class="btn btn-primary">laporan</a>
        <a href="admin.php?url=logout" class="btn btn-primary">Logout</a>

        <!--isi website-->
        <div class="card mt-2">
            <div class="card-body">
                <!--ini isi web kita, main php -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang di Halaman Administrator.</h4>";
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
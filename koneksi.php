<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_spp_ukk');

// cek database nyambung apa ngga
if (!$koneksi) {
    echo "Koneksi Anda gagal";
} /* else {
    echo "Koneksi ngokey";
} */

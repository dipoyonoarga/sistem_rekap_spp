<?php
$id_kelas = $_GET['id_kelas'];
// koneksi
include '../koneksi.php';
$sql = "SELECT*FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Data Kelas.</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input type="text" value="<?= $data['nama_kelas'] ?>" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Wali Kelas</label>
        <input value="<?= $data['kompetensi_keahlian'] ?>" type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>
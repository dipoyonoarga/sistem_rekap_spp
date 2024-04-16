<h5>Halaman Tambah Data Siswa.</h5>
<a href="?url=siswa" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-siswa">
    <div class="form-group mb-2">
        <label>NISN</label>
        <input type="number" name="nisn" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>NIS</label>
        <input type="number" name="nis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <!-- banyak relasi -->
    <div class="form-group mb-2">
        <label>kelas</label>
        <select name="id_kelas" class="form-control" required>
            <option value="">Pilih Kelas</option>
            <!-- ambil database kelas -->
            <?php
            // koneksi
            include '../koneksi.php';
            $kelas = mysqli_query($koneksi, "SELECT*FROM kelas ORDER BY nama_kelas ASC");
            foreach ($kelas as $data_kelas) {
            ?>
                <!-- untuk memunculkan opsi kelas yang sudah di add-->
                <option value="<?= $data_kelas['id_kelas'] ?>"><?= $data_kelas['nama_kelas']; ?></option>
            <?php  } ?>
        </select>
    </div>
    <!-- alamat menggunakan text area -->
    <div class="form-group mb-2">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="form-group mb-2">
        <label>No Telepon</label>
        <input type="number" name="no_telp" class="form-control" required>
    </div>

    <div class="form-group mb-2">
        <label>SPP</label>
        <select name="id_spp" class="form-control" required>
            <option value="">Pilih SPP</option>
            <!-- ambil database kelas -->
            <?php
            // koneksi
            include '../koneksi.php';
            $spp = mysqli_query($koneksi, "SELECT*FROM spp ORDER BY id_spp ASC");
            foreach ($spp as $data_spp) {
            ?>
                <!-- untuk memunculkan opsi kelas yang sudah di add-->
                <option value="<?= $data_spp['id_spp'] ?>"><?= $data_spp['tahun']; ?> | <?= number_format($data_spp['nominal'], 2, ',', '.');
                                                                                        $data_spp['nominal']; ?></option>
            <?php  } ?>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>
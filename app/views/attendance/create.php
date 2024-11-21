<!-- app/views/user/create.php
<h2>Tambah Kehadiran Members</h2>
<form action="/attendance/store" method="POST">
    <label for="anggota_yang_hadir">Anggota Yang Hadir:</label>
    <input type="int" name="anggota_yang_hadir" id="anggota_yang_hadir" required>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" id="tanggal" required>
    <label for="id_kelas">Id Kelas:</label>
    <input type="int" name="id_kelas" id="id_kelas" required>
    <button type="submit">Simpan</button>
</form> -->


<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Kehadiran Member</h2>
        <form action="/attendance/store" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="anggota_yang_hadir" class="form-label">Anggota Yang Hadir:</label>
                <input type="int" class="form-control" name="anggota_yang_hadir" id="anggota_yang_hadir" required>
                <div class="invalid-feedback">
                    Masukkan jumlah anggota yang hadir.
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                <div class="invalid-feedback">
                    Masukkan tanggal kehadiran.
                </div>
            </div>
            <div class="mb-3">
                <label for="id_kelas" class="form-label">ID kelas:</label>
                <select class="form-control" name="id_kelas" id="id_kelas" required>
                    <option value="" selected disabled>Pilih kelas</option>
                    <?php foreach ($workout_classes as $class): ?>
                        <option value="<?= $class['id_kelas'] ?>"><?= $class['id_kelas'] ?> - <?= $class['nama_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Masukkan ID kelas.
                </div>
            </div>


            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->

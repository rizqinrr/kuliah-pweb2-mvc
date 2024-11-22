<body>
<div class="container mt-2">
    <div class="card">
        <div class="card-header">
        <h3 class="text-center">Tambah Kehadiran Member</h3>
        </div>
        <form action="/attendance/store" method="POST" class="needs-validation" novalidate>
        <div class="card-body">
            <div class="mb-3">
                <label for="anggota_yang_hadir" class="form-label">Jumlah Anggota Yang Hadir:</label>
                <div class="input-group">
                <input type="number" class="form-control" name="anggota_yang_hadir" id="anggota_yang_hadir" placeholder="Masukkan Jumlah Anggota Members Yang Hadir" required>
                <div class="invalid-feedback">
                    Masukkan jumlah anggota yang hadir.
                </div>
                <span class="input-group-text">orang</span>
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
        </div>
        <div class="card-footer text-body-secondary">
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        <a href="/attendance/index" class="btn btn-outline-secondary">Kembali</a>
            </div>
           
        </div>
    </form>
    </div>
</div>
           
       
 

    <!-- Include Bootstrap JS and its dependencies -->


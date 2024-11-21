


<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Kehadiran Member</h2>
        <form action="/attendance/store" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="anggota_yang_hadir" class="form-label">Jumlah Anggota Yang Hadir:</label>
                <div class="input-group">
                <input type="number" class="form-control" name="anggota_yang_hadir" id="anggota_yang_hadir" required>
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


            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->


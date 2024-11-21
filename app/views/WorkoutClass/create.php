
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Pengguna Baru</h2>
        <form action="/WorkoutClass/store" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas:</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu:</label>
                <input type="time" name="waktu" id="waktu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="id_pelatih" class="form-label">ID Pelatih:</label>
                <select name="id_pelatih" id="id_pelatih">
                        <option value="">Pilih Pelatih</option>
                    <?php foreach ($pelatih as $index => $trainer): ?>
                        <option value="<?= $trainer['id_pelatih'] ?>"><?= $trainer['nama_pelatih']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota:</label>
                <input type="number" name="kuota" id="kuota" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/WorkoutClass/index" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

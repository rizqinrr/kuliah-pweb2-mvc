
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Jadwal</h2>
        <form action="/WorkoutClass/update/<?php echo $user['id_kelas']; ?>" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas:</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?php echo htmlspecialchars($user['nama_kelas']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan Nama Kelas.
                </div>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu:</label>
                <input type="time" class="form-control" id="waktu" name="waktu" value="<?php echo htmlspecialchars($user['waktu']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan Waktu.
                </div>
            </div>
            <div class="mb-3">
                <label for="id_pelatih" class="form-label">Nama Pelatih:</label>
                <select class="form-control" id="id_pelatih" name="id_pelatih">
                        <option value="">Pilih Pelatih</option>
                    <?php foreach ($pelatih as $trainer): ?>
                        <option value="<?= htmlspecialchars($trainer['id_pelatih']) ?>"> 
                        <?= ($trainer['nama_pelatih'] ==  $user['id_pelatih']) ? 'selected' : '';?> 
                        <?php htmlspecialchars($trainer['id_pelatih'])?></option>
                    <?php endforeach ?>
                </select>
                <div class="invalid-feedback">
                    Harap masukkan Nama Pelatih.
                </div>
            </div>
            </div>
            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota:</label>
                <input type="text" class="form-control" id="kuota" name="kuota" value="<?php echo htmlspecialchars($user['kuota']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan Kuota.
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <a href="/trainers/index" class="btn btn-outline-secondary">Back to List</a>
            </div>
        </form>
    </div>

</body>
</html>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Workout Class</h2>

        <form action="/WorkoutClass/update/<?php echo $user['id_kelas']; ?>" method="POST" class="needs-validation" novalidate>

            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas :</label>
                <input type="text" name="nama_kelas" id="nama_kelas" value="<?php echo $user['nama_kelas']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu :</label>
                <div class="input-group">
                    <span class="input-group-text">Pukul</span>
                    <input type="time" id="waktu" name="waktu" value="<?php echo $user['waktu']; ?>" class="form-control" required>
                    <span class="input-group-text">WIB</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="id_pelatih" class="form-label">Nama Pelatih:</label>
                <select name="id_pelatih" id="id_pelatih" class="form-control">
                    <option value="">Pilih Pelatih</option>
                    <?php foreach ($pelatih as $index => $trainer): ?>
                        <option value="<?= $trainer['id_pelatih'] ?>" <?= ($trainer['id_pelatih'] == $user['id_pelatih']) ? 'selected' : ''; ?>><?= $trainer['nama_pelatih'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota :</label>
                <div class="input-group">
                    <input type="number" name="kuota" id="kuota" class="form-control" value="<?php echo $user['kuota']; ?>" required>
                    <span class="input-group-text">orang</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="/WorkoutClass/index">Back to List</a>
</body>

</html>
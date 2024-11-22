
<body>

    <div class="container mt-2">
            <div class="card">
        <div class="card-header">
        <h3 class="text-center">Tambah Jadwal Workout </h3 >
        </div>
        <form action="/WorkoutClass/store" method="POST" class="needs-validation" novalidate>
        <div class="card-body">   
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas:</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" required>


            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu:</label>
                <input type="time" name="waktu" id="waktu" class="form-control" required>
            </div>
            <div class="mb-3">

                <label for="id_pelatih" class="form-label">Nama Pelatih:</label>
                <select class= "form-control" name="id_pelatih" id="id_pelatih" required>
                        <option value="" selected disabled>Pilih Pelatih</option>

                    <?php foreach ($pelatih as $index => $trainer): ?>
                        <option value="<?= $trainer['id_pelatih'] ?>"><?= $trainer['nama_pelatih']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="invalid-feedback">
                    Masukkan ID kelas.
            </div>
            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota:</label>
                <input type="number" name="kuota" id="kuota" class="form-control" placeholder="Masukkan Kuota Kelas">
            </div>
            
            </div>
        <div class="card-footer text-body-secondary">
        <div class="d-flex justify-content-between">
        <a href="/WorkoutClass/index" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
                    </div>
        </form>
    </div>
    </div>



<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Trainers Baru</h2>
        <form action="/trainers/store" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama_pelatih" class="form-label">Nama Pelatih:</label>
                <input type="text" class="form-control" name="nama_pelatih" id="nama_pelatih" required>
                <div class="invalid-feedback">
                    Harap masukkan nama pelatih.
                </div>
            </div>
            <div class="mb-3">
                <label for="spesialis" class="form-label">Spesialis:</label>
                <input type="text" class="form-control" name="spesialis" id="spesialis" required>
                <div class="invalid-feedback">
                    Harap masukkan spesialis.
                </div>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal:</label>
                <input type="text" class="form-control" name="jadwal" id="jadwal" required>
                <div class="invalid-feedback">
                    Harap masukkan jadwal.
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->

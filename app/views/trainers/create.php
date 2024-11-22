
<body>
    <div class="container mt-5">
    <div class="card">
                <div class="card-header">
                <h3 class="text-center">Tambah Trainers Baru</h3 >
                </div>
            <form action="/trainers/store" method="POST" class="needs-validation" novalidate>
            <div class="card-body">
        
            <div class="mb-3">
                <label for="nama_pelatih" class="form-label">Nama Pelatih:</label>
                <input type="text" class="form-control" name="nama_pelatih" id="nama_pelatih" placeholder="Masukkan Nama Pelatih">
                <div class="invalid-feedback">
                    Harap masukkan nama pelatih.
                </div>
            </div>
            <div class="mb-3">
                <label for="spesialis" class="form-label">Spesialis:</label>
                <input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Masukkan Spesialis">
                <div class="invalid-feedback">
                    Harap masukkan spesialis.
                </div>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal:</label>
                <input type="text" class="form-control" name="jadwal" id="jadwal" placeholder="Masukkan Jadwal">
                <div class="invalid-feedback">
                    Harap masukkan jadwal.
                </div>
            </div>
            
            </div>
            <div class="card-footer text-body-secondary">
            <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <a href="/trainers/index" class="btn btn-outline-secondary">Kembali</a>
            </div>
                
            </div>

        </form>
</div>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->


<body>
    <div class="container mt-2">
    <div class="card">
        <div class="card-header">
        <h3 class="text-center">Edit Trainers</h3>
        </div>   

    <div class="card-body">

        <form action="/trainers/update/<?php echo $trainers['id_pelatih']; ?>" method="POST" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama_pelatih" class="form-label">Nama Pelatih:</label>
                <input type="text" class="form-control" id="nama_pelatih" name="nama_pelatih" value="<?php echo htmlspecialchars($trainers['nama_pelatih']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan nama pelatih.
                </div>
            </div>
            <div class="mb-3">
                <label for="spesialis" class="form-label">Spesialis:</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?php echo htmlspecialchars($trainers['spesialis']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan spesialis.
                </div>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal:</label>
                <input type="text" class="form-control" id="jadwal" name="jadwal" value="<?php echo htmlspecialchars($trainers['jadwal']); ?>" required>
                <div class="invalid-feedback">
                    Harap masukkan jadwal.
                </div>
            </div>
            
            </div>
            <div class="card-footer text-body-secondary">
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <a href="/trainers/index" class="btn btn-outline-secondary">Kembali</a>
            </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>

</body>
</html>

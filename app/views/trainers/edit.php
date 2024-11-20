
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Trainers</h2>
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
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <a href="/trainers/index" class="btn btn-outline-secondary">Back to List</a>
            </div>
        </form>
    </div>

    <!-- Include Bootstrap JS and its dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable form validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>

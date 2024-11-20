<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Trainers Baru</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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

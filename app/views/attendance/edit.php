
<body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
        <h3 class="text-center">Edit Kehadiran Member</h3>
    </div>
    <form action="/attendance/update/<?php echo $attendance['id_attendance']; ?>" method="POST" class="needs-validation" novalidate>
    <div class="card-body">
            <!-- Input jumlah anggota yang hadir -->
            <div class="mb-3">
                <label for="anggota_yang_hadir" class="form-label">Anggota Yang Hadir:</label>
                <input type="number" class="form-control" id="anggota_yang_hadir" name="anggota_yang_hadir"  

                       value="<?php echo htmlspecialchars($attendance['anggota_yang_hadir']); ?>" required>
                <div class="invalid-feedback">
                    Masukkan jumlah anggota yang hadir.
                </div>
            </div>

            <!-- Input tanggal kehadiran -->
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" 
                       value="<?php echo htmlspecialchars($attendance['tanggal']); ?>" required>
                <div class="invalid-feedback">
                    Masukkan tanggal kehadiran member.
                </div>
            </div>

            <!-- Combobox untuk memilih kelas -->
            <div class="mb-3">

                <label for="id_kelas" class="form-label">Nama Kelas:</label>

                <select class="form-control" id="id_kelas" name="id_kelas" required>
                    <option value="" disabled>Pilih Kelas</option>
                    <?php foreach ($classes as $class): ?>
                        <option value="<?php echo $class['id_kelas']; ?>" 
                            <?php echo $class['id_kelas'] == $attendance['id_kelas'] ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($class['id_kelas'] . ' - ' . $class['nama_kelas']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                    Pilih kelas yang valid.
                </div>
            </div>


            <!-- Tombol untuk submit atau kembali -->
            
        </div>
        <div class="card-footer text-body-secondary">
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-outline-primary">Update</button>
                <a href="/attendance/index" class="btn btn-outline-secondary">Kembali</a>
            </div>
        </div>
    </form>
                    </div>

    </div>
</body>
</html>

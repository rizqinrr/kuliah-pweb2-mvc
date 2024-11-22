
<!-- app/views/attendance/index.php

<!-- Konten Halaman -->
<div class="container mt-5">

    <h2 class="mb-4 text-center">Daftar Kehadiran Member</h2>

    <a href="/attendance/create" class="btn btn-outline-primary mb-3">Tambah Kehadiran Member</a> <!-- Tombol dengan gaya Bootstrap -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-secondary">

                <tr class="text-center">

                    <th>No</th>
                    <th>Anggota Yang Hadir</th>
                    <th>Tanggal</th>
                    <th>ID kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($attendance)): ?>
                    <?php foreach ($attendance as $index => $hadir): ?>
                        <tr>

                            <td class="text-center"><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($hadir['anggota_yang_hadir']) ?></td>
                            <td><?= htmlspecialchars($hadir['tanggal']) ?></td>
                            <td><?= htmlspecialchars($hadir['id_kelas']) ?></td>
                            <td class="text-center">
                                <a href="/attendance/edit/<?php echo $hadir['id_attendance']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                                <a href="/attendance/delete/<?php echo $hadir['id_attendance']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>
               </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>

                        <td colspan="5" class="text-center">Tidak Ada Data Kehadiran Members</td>

                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>



<!-- Konten Halaman -->
<div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Pelatih Gym</h2>

    <a href="/trainers/create" class="btn btn-outline-primary mb-3">Tambah Pelatih Baru</a> <!-- Tombol dengan gaya Bootstrap -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-secondary">

                <tr class="text-center">

                    <th>No</th>
                    <th>Nama Pelatih</th>
                    <th>Spesialis</th>
                    <th>Jadwal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($trainers)): ?>
                    <?php foreach ($trainers as $index => $trainer): ?>
                        <tr>
                            <td class="text-center"><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($trainer['nama_pelatih']) ?></td>
                            <td><?= htmlspecialchars($trainer['spesialis']) ?></td>
                            <td><?= htmlspecialchars($trainer['jadwal']) ?></td>
                            <td class="text-center">
                                <a href="/trainers/edit/<?php echo $trainer['id_pelatih']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                                <a href="/trainers/delete/<?php echo $trainer['id_pelatih']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak Ada Data Pelatih</td>

                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

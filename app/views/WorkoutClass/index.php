<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Workout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Jadwal Workout</h2>
        <a href="/WorkoutClass/create" class="btn btn-outline-primary mb-3">Tambahkan Jadwal</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Waktu</th>
                        <th>ID Pelatih</th>
                        <th>Kuota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($classes)): ?>
                    <?php foreach ($classes as $index => $user): ?>
                        <tr>
                            <td class="text-center"><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($user['nama_kelas']) ?></td>
                            <td><?= htmlspecialchars($user['waktu']) ?></td>
                            <td><?= htmlspecialchars($user['id_pelatih']) ?></td>
                            <td class="text-center"><?= htmlspecialchars($user['kuota']) ?></td>
                            <td class="text-center">
                                <a href="/WorkoutClass/edit/<?= $user['id_kelas']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/WorkoutClass/delete/<?= $user['id_kelas']; ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak Ada Data Jadwal Workout</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

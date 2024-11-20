<?php
// Include header template
include '../template/header.php'; // Path relatif dari folder users ke folder template
?>

<!-- Konten Halaman -->
<h2>Daftar Pelatih</h2>
<a href="/users/create" class="btn btn-primary mb-3">Tambah Pelatih Baru</a> <!-- Tambahkan styling Bootstrap -->
<ul class="list-group">
    <?php foreach ($users as $user): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>
                <?= htmlspecialchars($user['nama_pelatih']) ?> - <?= htmlspecialchars($user['spesialis']) ?> - <?= htmlspecialchars($user['jadwal']) ?>
            </span>
            <span>
                <a href="/users/edit/<?php echo $user['id_pelatih']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/users/delete/<?php echo $user['id_pelatih']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </span>
        </li>
    <?php endforeach; ?>
</ul>

<?php
// Include footer template
include '../template/footer.php'; // Path relatif dari folder users ke folder template
?>
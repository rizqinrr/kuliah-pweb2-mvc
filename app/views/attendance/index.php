<!-- app/views/attendance/index.php -->
<h2>Daftar Kehadiran</h2>
<a href="/attendance/create">Tambah Kehadiran Member</a>
<ul>
    <?php foreach ($attendance as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['anggota_yang_hadir']) ?> - <?= htmlspecialchars($user['tanggal']) ?> - <?= htmlspecialchars($user['id_kelas']) ?>
            <a href="/attendance/edit/<?php echo $user['id_attendance']; ?>">Edit</a> |
            <a href="/attendance/delete/<?php echo $user['id_attendance']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

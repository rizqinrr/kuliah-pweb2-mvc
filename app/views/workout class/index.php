<!-- app/views/user/index.php -->
<h2> Jadwal Workout</h2>
<a href="/WorkoutClass/create">Tambahkan Jadwal</a>
<ul>
    <?php foreach ($classes as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['nama_kelas']) ?> - <?= htmlspecialchars($user['waktu']) ?> - <?= htmlspecialchars($user['id_pelatih']) ?> - <?= htmlspecialchars($user['kuota']) ?>
            <a href="/WorkoutClass/edit/<?php echo $user['id_kelas']; ?>">Edit</a> |
            <a href="/WorkoutClass/delete/<?php echo $user['id_kelas']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

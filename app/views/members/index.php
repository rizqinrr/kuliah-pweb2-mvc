<!-- app/views/user/index.php -->
<h2>Daftar Members</h2>
<a href="/members/create">Tambah Member Baru</a>
<ul>
    <?php foreach ($members as $member): ?>
        <div>
            <p><?= htmlspecialchars($member['nama_member']) ?> - <?= htmlspecialchars($member['usia']) ?> - <?= htmlspecialchars($member['jenis_kelamin']) ?> - <?= htmlspecialchars($member['paket_langganan']) ?>
            <a href="/members/edit/<?php echo $member['id_member']; ?>">Edit</a> |
            <a href="/members/delete/<?php echo $member['id_member']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

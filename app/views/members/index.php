<!-- app/views/member/index.php -->

<body>
<div class="container mt-5">
   
    <h2 class="text-center text-dark mb-4">Daftar Members Gym</h2>

    <div class="text-start mb-3">
        <a href="/members/create" class="btn btn-outline-primary">Tambah Member Baru</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr class="text-center">
                <th>No</th>
                <th>Nama Member</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Paket Langganan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($members)): ?>
            <?php foreach ($members as $index => $member): ?>
                <tr>
                    <td class="text-center"><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($member['nama_member']) ?></td>
                    <td class="text-center" ><?= htmlspecialchars($member['usia']) ?></td>
                    <td><?= htmlspecialchars($member['jenis_kelamin']) ?></td>
                    <td><?= htmlspecialchars($member['paket_langganan']) ?></td>
                    <td class="text-center">
                        <a href="/members/edit/<?php echo $member['id_member']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/members/delete/<?php echo $member['id_member']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak Ada Data Members Gym</td>
                    </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>


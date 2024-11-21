<!-- app/views/user/index.php -->
<body>
<div class="container mt-5">
   
    <h2 class="text-center text-dark mb-4">Daftar Data Members Gym</h2>

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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $index => $member): ?>
                <tr class="text-center">
                    <td ><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($member['nama_member']) ?></td>
                    <td ><?= htmlspecialchars($member['usia']) ?></td>
                    <td><?= htmlspecialchars($member['jenis_kelamin']) ?></td>
                    <td><?= htmlspecialchars($member['paket_langganan']) ?></td>
                    <td >
                        <a href="/members/edit/<?php echo $member['id_member']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/members/delete/<?php echo $member['id_member']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
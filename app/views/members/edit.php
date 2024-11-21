
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center mb-4 text-dark">Edit Data Member</h2>
                        <hr style="border: 4px solid grey;">
                        <form action="/members/update/<?php echo $member['id_member']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="nama_member" class="form-label fw-bold">Nama Member</label>
                                <input type="text" class="form-control" id="nama_member" name="nama_member" value="<?php echo htmlspecialchars($member['nama_member']); ?>" placeholder="Masukkan Nama Member" required>
                            </div>
                            <div class="mb-3">
                                <label for="usia" class="form-label fw-bold">Usia</label>
                                <input type="text" class="form-control" id="usia" name="usia" value="<?php echo htmlspecialchars($member['usia']); ?>" placeholder="Masukkan Usia Member" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" <?= $member['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= $member['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="paket_langganan" class="form-label fw-bold">Paket Langganan</label>
                                <select class="form-select" id="paket_langganan" name="paket_langganan" required>
                                    <option value="">Pilih Paket Langganan</option>
                                    <option value="Platinum" <?= $member['paket_langganan'] == 'Platinum' ? 'selected' : '' ?>>Platinum</option>
                                    <option value="Gold" <?= $member['paket_langganan'] == 'Gold' ? 'selected' : '' ?>>Gold</option>
                                    <option value="Silver" <?= $member['paket_langganan'] == 'Silver' ? 'selected' : '' ?>>Silver</option>
                                </select>
                            </div>
                            <div class="text-end mb-3">
                                <a href="/members/index" class="btn btn-outline-secondary">Kembali</a>
                                <button type="submit" class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


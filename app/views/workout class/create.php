<!-- app/views/user/create.php -->
<h2>Tambah Pengguna Baru</h2>
<form action="/WorkoutClass/store" method="POST">
    <label for="nama_kelas">Nama Kelas:</label>
    <input type="text" name="nama_kelas" id="nama_kelas" required>
    <label for="waktu">Waktu:</label>
    <input type="time" name="waktu" id="waktu" required>
    <label for="id_pelatih">ID Pelatih:</label>
    <input type="integer" name="id_pelatih" id="id_pelatih" required>
    <label for="kuota">Kuota:</label>
    <input type="integer" name="kuota" id="kuota" required>
    <button type="submit">Simpan</button>
</form>

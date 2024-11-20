<!-- app/views/user/create.php -->
<h2>Tambah Kehadiran Members</h2>
<form action="/attendance/store" method="POST">
    <label for="anggota_yang_hadir">Anggota Yang Hadir:</label>
    <input type="int" name="anggota_yang_hadir" id="anggota_yang_hadir" required>
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" id="tanggal" required>
    <label for="id_kelas">Id Kelas:</label>
    <input type="int" name="id_kelas" id="id_kelas" required>
    <button type="submit">Simpan</button>
</form>

<!-- app/views/members/create.php -->
<h2>Tambah Member Baru</h2>
<form action="/members/store" method="POST">
    <label for="nama_member">Nama Member :</label>
    <input type="text" name="nama_member" id="nama_member" required>
    <label for="usia">Usia :</label>
    <input type="text" name="usia" id="usia" required>
    <label for="jenis_kelamin">Jenis Kelamin :</label>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
    <label for="paket_langganan">Paket Langganan :</label>
    <input type="text" name="paket_langganan" id="paket_langganan" required>
    <button type="submit">Simpan</button>
</form>

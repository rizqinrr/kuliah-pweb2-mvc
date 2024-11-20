<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Jadwal</title>
</head>
<body>
    <h2>Edit Jadwal</h2>
    <form action="/WorkoutClass/update/<?php echo $user['id_kelas']; ?>" method="POST">
        <label for="nama_kelas">Nama Kelas :</label>
        <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $user['nama_kelas']; ?>" required>
        <br>
        <label for="waktu">Waktu :</label>
        <input type="time" id="waktu" name="waktu" value="<?php echo $user['waktu']; ?>" required>
        <br>
        <label for="id_pelatih">ID Pelatih :</label>
        <input type="integer" id="id_pelatih" name="id_pelatih" value="<?php echo $user['id_pelatih']; ?>" required>
        <br>
        <label for="kuota">Kuota :</label>
        <input type="integer" id="kuota" name="kuota" value="<?php echo $user['kuota']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/WorkoutClass/index">Back to List</a>
</body>
</html>
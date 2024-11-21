<!-- app/views/attendance/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kehadiran Members</title>
</head>
<body>
    <h2>Edit Kehadiran Members</h2>
    <form action="/attendance/update/<?php echo $attendance['id_attendance']; ?>" method="POST">
        <label for="anggota_yang_hadir">Anggota Yang Hadir:</label>
        <input type="int" id="anggota_yang_hadir" name="anggota_yang_hadir" value="<?php echo $attendance['anggota_yang_hadir']; ?>" required>
        <br>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="<?php echo $attendance['tanggal']; ?>" required>
        <br>
        <label for="id_kelas">ID Kelas:</label>
        <input type="int" id="id_kelas" name="id_kelas" value="<?php echo $attendance['id_kelas']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/attendance/index">Back to List</a>
</body>
</html>
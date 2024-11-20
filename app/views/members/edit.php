<!-- app/views/members/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Members</title>
</head>
<body>
    <h2>Edit Members</h2>
    <form action="/members/update/<?php echo $member['id_member']; ?>" method="POST">
        <label for="nama_member">Nama Member :</label>
        <input type="text" id="nama_member" name="nama_member" value="<?php echo $member['nama_member']; ?>" required>
        <br>
        <label for="usia">Usia:</label>
        <input type="text" id="usia" name="usia" value="<?php echo $member['usia']; ?>" required>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $member['jenis_kelamin']; ?>" required>
        <br>
        <label for="paket_langganan">Paket Langganan:</label>
        <input type="text" id="paket_langganan" name="paket_langganan" value="<?php echo $member['paket_langganan']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/members/index">Back to List</a>
</body>
</html>
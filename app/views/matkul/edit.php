<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h2>Edit Mata Kuliah</h2>
    <form method="post" action="index.php?page=matkul&action=update">
        <input type="hidden" name="id" value="<?= $matkul['id'] ?>">
        <label>Kode MK</label><br>
        <input type="text" name="kode_mk" value="<?= htmlspecialchars($matkul['kode_mk']) ?>" required><br><br>
        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama_mk" value="<?= htmlspecialchars($matkul['nama_mk']) ?>" required><br><br>
        <label>SKS</label><br>
        <input type="number" name="sks" value="<?= htmlspecialchars($matkul['sks']) ?>" required><br><br>
        <label>Semester</label><br>
        <input type="number" name="semester" value="<?= htmlspecialchars($matkul['semester']) ?>" required><br><br>
        <label>Dosen Pengampu</label><br>
        <input type="text" name="dosen" value="<?= htmlspecialchars($matkul['dosen']) ?>" required><br><br>
        <button type="submit">Update</button>
        <a href="index.php?page=matkul">Kembali</a>
    </form>
</body>
</html>
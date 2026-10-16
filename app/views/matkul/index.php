<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="index.php?page=matkul&action=create">Tambah Data Mata Kuliah</a>
    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 12px;">
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($matkul as $m): ?>
        <tr>
            <td><?= htmlspecialchars($m['kode_mk']) ?></td>
            <td><?= htmlspecialchars($m['nama_mk']) ?></td>
            <td><?= htmlspecialchars($m['sks']) ?></td>
            <td><?= htmlspecialchars($m['semester']) ?></td>
            <td><?= htmlspecialchars($m['dosen']) ?></td>
            <td>
                <a href="index.php?page=matkul&action=edit&id=<?= $m['id'] ?>">Edit</a>
                <form method="post" action="index.php?page=matkul&action=delete" style="display:inline" onsubmit="return confirm('Hapus data mata kuliah ini?')">
                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .card { border: none; border-radius: 12px; }
        .form-control { border-radius: 8px; padding: 10px 14px; border-color: #cbd5e1; }
        .form-control:focus { box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15); border-color: #4f46e5; }
        .btn-warning { background-color: #f59e0b; border-color: #f59e0b; color: white; border-radius: 8px; padding: 10px 20px; font-weight: 500; }
        .btn-warning:hover { background-color: #d97706; color: white; }
        .btn-secondary { border-radius: 8px; padding: 10px 20px; font-weight: 500; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold text-dark mb-1">✏️ Edit Mata Kuliah</h4>
                        <p class="text-muted small mb-4">Perbarui informasi data mata kuliah di bawah ini.</p>
                        
                        <form method="post" action="index.php?page=matkul&action=update">
                            <input type="hidden" name="id" value="<?= $matkul['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label fw-medium text-secondary small">KODE MK</label>
                                <input type="text" name="kode_mk" class="form-control" value="<?= htmlspecialchars($matkul['kode_mk']) ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-medium text-secondary small">NAMA MATA KULIAH</label>
                                <input type="text" name="nama_mk" class="form-control" value="<?= htmlspecialchars($matkul['nama_mk']) ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-medium text-secondary small">SKS</label>
                                    <input type="number" name="sks" class="form-control" value="<?= htmlspecialchars($matkul['sks']) ?>" required>
                                والث</div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-medium text-secondary small">SEMESTER</label>
                                    <input type="number" name="semester" class="form-control" value="<?= htmlspecialchars($matkul['semester']) ?>" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-medium text-secondary small">DOSEN PENGAMPU</label>
                                <input type="text" name="dosen" class="form-control" value="<?= htmlspecialchars($matkul['dosen']) ?>" required>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="index.php?page=matkul" class="btn btn-light text-secondary border">Kembali</a>
                                <button type="submit" class="btn btn-warning">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
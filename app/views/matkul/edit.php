<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .card { border: none; border-radius: 12px; }
        .form-control { border-radius: 8px; padding: 10px 14px; border-color: #cbd5e1; }
        .form-control:focus { box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15); border-color: #4f46e5; }
        
        /* Warna Biru Profesional */
        .theme-blue { color: #4f46e5; }
        .btn-primary-custom { 
            background-color: #4f46e5; 
            border-color: #4f46e5; 
            color: white; 
            border-radius: 8px; /* Menggunakan sudut profesional yang rapi */
            padding: 10px 22px; 
            font-weight: 500; 
            transition: all 0.2s;
        }
        .btn-primary-custom:hover { 
            background-color: #4338ca; 
            border-color: #4338ca; 
            color: white;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        
                        <!-- Header Judul -->
                        <div class="d-flex align-items-center gap-3 mb-4 border-bottom pb-3">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center border" style="width: 50px; height: 50px;">
                                <i class="bi bi-pencil-square fs-3 theme-blue"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold text-dark mb-0">Edit Data Mata Kuliah</h3>
                                <p class="text-muted mb-0 small">Perbarui informasi detail mata kuliah di bawah ini.</p>
                            </div>
                        </div>
                        
                        <form method="post" action="index.php?page=matkul&action=update">
                            <input type="hidden" name="id" value="<?= $matkul['id'] ?>">
                            
                            <div class="mb-3">
                                <label class="form-label fw-medium text-secondary small">KODE MK</label>
                                <input type="text" name="kode_mk" class="form-control" value="<?= htmlspecialchars($matkul['kode_mk']) ?>" placeholder="Contoh: IF101" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-medium text-secondary small">NAMA MATA KULIAH</label>
                                <input type="text" name="nama_mk" class="form-control" value="<?= htmlspecialchars($matkul['nama_mk']) ?>" placeholder="Contoh: Pemrograman Web" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-medium text-secondary small">SKS</label>
                                    <input type="number" name="sks" class="form-control" value="<?= htmlspecialchars($matkul['sks']) ?>" placeholder="Contoh: 3" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-medium text-secondary small">SEMESTER</label>
                                    <input type="number" name="semester" class="form-control" value="<?= htmlspecialchars($matkul['semester']) ?>" placeholder="Contoh: 4" required>
                                </div>
                            </div>
                            
                            <div class="mb-5">
                                <label class="form-label fw-medium text-secondary small">DOSEN PENGAMPU</label>
                                <input type="text" name="dosen" class="form-control" value="<?= htmlspecialchars($matkul['dosen']) ?>" placeholder="Contoh: Pak Budi" required>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center border-top pt-4">
                                <a href="index.php?page=matkul" class="btn btn-light text-secondary border px-4 rounded-3 fw-medium">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali
                                </a>
                                <!-- Tombol Update Data dengan sudut kotak melengkung profesional (rounded: 8px) -->
                                <button type="submit" class="btn btn-primary-custom fw-semibold shadow-sm">
                                    <i class="bi bi-check-circle me-1"></i> Update Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
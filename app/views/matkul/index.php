<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Mata Kuliah - Sistem Informasi</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }
        .navbar {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        .stat-card {
            border-left: 4px solid #4f46e5;
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
        .table thead th {
            background-color: #f1f5f9;
            color: #475569;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #e2e8f0;
            padding: 14px 16px;
        }
        .table tbody td {
            padding: 16px;
            vertical-align: middle;
            color: #1e293b;
            border-bottom: 1px solid #f1f5f9;
        }
        .btn-primary-custom {
            background-color: #4f46e5;
            border-color: #4f46e5;
            color: white;
            font-weight: 500;
            border-radius: 8px;
            padding: 10px 18px;
            transition: all 0.2s;
        }
        .btn-primary-custom:hover {
            background-color: #4338ca;
            border-color: #4338ca;
            color: white;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
        }
        .badge-kode {
            background-color: #e0e7ff;
            color: #4338ca;
            font-weight: 600;
            padding: 6px 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg py-3 mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark d-flex align-items-center gap-2" href="#">
                <div class="bg-indigo text-white p-2 rounded-3 d-flex align-items-center justify-content-center" style="background-color: #4f46e5; width: 36px; height: 36px;">
                    <i class="bi bi-journal-code"></i>
                </div>
                <span>Sistem Akademik <small class="text-muted fw-normal">| MVC Native</small></span>
            </a>
            <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill">
                <i class="bi bi-person-circle me-1"></i> Administrator
            </span>
        </div>
    </nav>

    <div class="container py-3">
        <!-- Header & Tombol Tambah -->
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold text-dark mb-1">Daftar Mata Kuliah</h2>
                <p class="text-muted mb-0">Kelola kurikulum, SKS, dan dosen pengampu dengan antarmuka terpusat.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="index.php?page=matkul&action=create" class="btn btn-primary-custom shadow-sm">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Mata Kuliah
                </a>
            </div>
        </div>

        <!-- Tabel Data Utama -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">Kode MK</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Semester</th>
                                <th>Dosen Pengampu</th>
                                <th class="text-center pe-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($matkul)): ?>
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-5">
                                        <i class="bi bi-inbox fs-2 d-block mb-2 text-secondary"></i>
                                        Belum ada data mata kuliah yang tersimpan.
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($matkul as $m): ?>
                                <tr>
                                    <td class="ps-4">
                                        <span class="badge-kode"><?= htmlspecialchars($m['kode_mk']) ?></span>
                                    </td>
                                    <td class="fw-semibold text-dark"><?= htmlspecialchars($m['nama_mk']) ?></td>
                                    <td>
                                        <span class="badge bg-indigo bg-opacity-10 text-primary border border-primary-subtle px-2 py-1">
                                            <?= htmlspecialchars($m['sks']) ?> SKS
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-secondary fw-medium">Semester <?= htmlspecialchars($m['semester']) ?></span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="bg-light rounded-circle text-secondary d-flex align-items-center justify-content-center border" style="width: 30px; height: 30px; font-size: 0.8rem;">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            <span class="text-dark fw-medium"><?= htmlspecialchars($m['dosen']) ?></span>
                                        </div>
                                    </td>
                                    <td class="text-center pe-4">
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="index.php?page=matkul&action=edit&id=<?= $m['id'] ?>" class="btn btn-sm btn-light text-warning border px-3 rounded-2 fw-semibold" title="Edit Data">
                                                <i class="bi bi-pencil-square me-1"></i> Edit
                                            </a>
                                            <form method="post" action="index.php?page=matkul&action=delete" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus data mata kuliah ini?')">
                                                <input type="hidden" name="id" value="<?= $m['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-light text-danger border px-3 rounded-2 fw-semibold" title="Hapus Data">
                                                    <i class="bi bi-trash me-1"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
# MVC PHP Native - Manajemen Mata Kuliah

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native dengan manajemen mata kuliah.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi
1. Clone atau salin project ke folder web server.
2. Import database `db_kampus` atau sesuai konfigurasi lokal.
3. Sesuaikan koneksi database jika diperlukan.
4. Buka `http://localhost/mvc-matkul/public/index.php?page=matkul`.

## Struktur MVC
- `app/models/` : akses dan operasi data.
- `app/controllers/` : alur request dan pemanggilan Model/View.
- `app/views/` : tampilan HTML.
- `public/` : entry point aplikasi.

## Fitur
- Menampilkan data mata kuliah
- Menambahkan data mata kuliah
- Mengubah data mata kuliah
- Menghapus data mata kuliah
- Notifikasi Flash Message (Pop-up Sukses)

## Histori Git
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan.
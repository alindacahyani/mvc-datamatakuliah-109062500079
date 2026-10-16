CREATE DATABASE IF NOT EXISTS db_matkul
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE db_matkul;

CREATE TABLE IF NOT EXISTS mata_kuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_mk VARCHAR(20) NOT NULL UNIQUE,
    nama_mk VARCHAR(100) NOT NULL,
    sks INT NOT NULL,
    semester INT NOT NULL,
    dosen VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mata_kuliah (kode_mk, nama_mk, sks, semester, dosen) VALUES
('IF101', 'Pemrograman Berorientasi Objek', 4, 3, 'Pak Arif'),
('IF102', 'Pemrograman Web', 3, 4, 'Pak Toni'),
('IF103', 'Sistem Basis Data', 4, 2, 'Pak Azzam');
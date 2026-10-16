<?php
class MatkulController
{
    public function __construct(private Matkul $model) 
    {
        // Memastikan session aktif untuk fitur Flash Message (Pop-up sukses)
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index(): void
    {
        $matkul = $this->model->getAll();
        require __DIR__ . '/../views/matkul/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/matkul/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);

        // Set Pop-up Sukses Tambah Data
        $_SESSION['flash'] = [
            'pesan' => 'Data mata kuliah berhasil ditambahkan!',
            'tipe' => 'success'
        ];

        header('Location: index.php?page=matkul');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $matkul = $this->model->findById($id);
        if (!$matkul) {
            http_response_code(404);
            exit('Data mata kuliah tidak ditemukan.');
        }
        require __DIR__ . '/../views/matkul/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);

        // Set Pop-up Sukses Update Data
        $_SESSION['flash'] = [
            'pesan' => 'Data mata kuliah berhasil diperbarui!',
            'tipe' => 'success'
        ];

        header('Location: index.php?page=matkul');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);

        // Set Pop-up Sukses Hapus Data
        $_SESSION['flash'] = [
            'pesan' => 'Data mata kuliah berhasil dihapus!',
            'tipe' => 'success'
        ];

        header('Location: index.php?page=matkul');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'kode_mk'  => trim($input['kode_mk'] ?? ''),
            'nama_mk'  => trim($input['nama_mk'] ?? ''),
            'sks'      => (int) ($input['sks'] ?? 0),
            'semester' => (int) ($input['semester'] ?? 0),
            'dosen'    => trim($input['dosen'] ?? '')
        ];

        if ($data['kode_mk'] === '' || $data['nama_mk'] === '' || $data['sks'] <= 0 || $data['semester'] <= 0 || $data['dosen'] === '') {
            exit('Semua field wajib diisi dengan benar.');
        }

        return $data;
    }
}
?>
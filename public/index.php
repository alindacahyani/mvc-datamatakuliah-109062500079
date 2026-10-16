<?php
require __DIR__ . '/../config/database.php';
require __DIR__ . '/../app/models/Matkul.php';
require __DIR__ . '/../app/controllers/MatkulController.php';

$db = (new Database())->connect();
$model = new Matkul($db);
$controller = new MatkulController($model);

$page = $_GET['page'] ?? 'matkul';
$action = $_GET['action'] ?? 'index';

if ($page !== 'matkul') {
    http_response_code(404);
    exit('Halaman tidak ditemukan.');
}

match ($action) {
    'index' => $controller->index(),
    'create' => $controller->create(),
    'store' => $controller->store(),
    'edit' => $controller->edit(),
    'update' => $controller->update(),
    'delete' => $controller->delete(),
    default => (function () {
        http_response_code(404);
        exit('Action tidak ditemukan.');
    })()
};
?>
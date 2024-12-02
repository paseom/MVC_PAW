<?php
require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\app\models\User.php';

class AuthController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function login() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $password = $_POST['password'];

            $user = $this->userModel->findUserByName($nama);

            if ($user && $password === $user['password']) {
                $_SESSION['user_nama'] = $user['nama'];
                header('Location: index.php?action=list');
                exit;
            } else {
                $error = "Nama atau password salah.";
            }
        }

        require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\auth\login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $password = $_POST['password'];

            if ($this->userModel->createUser($nama, $password)) {
                header('Location: index.php?action=login');
                exit;
            } else {
                $error = "Pendaftaran gagal. Coba lagi.";
            }
        }

        require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\auth\register.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
    }
}

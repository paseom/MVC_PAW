<?php
require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\config\database.php';
require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\app\controllers\AuthController.php';
require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\app\controllers\RecipeController.php';

$action = $_GET['action'] ?? 'login';

$database = new Database();
$db = $database->connect();

$authController = new AuthController($db);
$recipeController = new RecipeController($db);

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'register':
        $authController->register();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'list':
        $recipeController->list();
        break;
    default:
        echo "Halaman tidak ditemukan.";
        break;
}

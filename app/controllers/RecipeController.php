<?php
require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\app\models\Recipe.php';

class RecipeController {
    private $recipeModel;

    public function __construct($db) {
        $this->recipeModel = new Recipe($db);
    }

    public function index() {
        $recipes = $this->recipeModel->getAllRecipes();

        if (empty($recipes)) {
            require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\detail.php';
        } else {
            require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\list.php';
        }
    }

    public function detail($id) {
        $recipe = $this->recipeModel->getRecipeById($id);
    
        if ($recipe) {
            require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\detail.php';
        } else {
            echo "Recipe not found!";
        }
    }

    public function home() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }
    
        $recipes = $this->recipeModel->getAllRecipes();
        require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\list.php';
    }    

    public function list() {
        // Ambil data dari model
        $recipes = $this->recipeModel->getAllRecipes();

        // Pilih view berdasarkan apakah data tersedia
        if ($recipes) {
            require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\list.php';
        } else {
            require_once __DIR__ . 'C:\xampp\htdocs\Projek\MVC\views\recipe\noData.php';
        }
    }
}

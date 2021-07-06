<?php
/**
 * 
 * ./app/controllers/categorieController.php
 * 
 */
namespace App\Controllers\categorieController;
use App\Models\CategoriesModel;


function indexAction(\PDO $conn, int $id)
{
    include_once "../app/models/categoriesModel.php";
    $posts = CategoriesModel\findAllByCategorieId($conn, $id);

    global $content;
    ob_start();
    include "../app/views/posts/index.php";
    $content = ob_get_clean();
}

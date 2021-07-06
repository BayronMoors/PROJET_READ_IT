<?php 
/**
 * 
 * ./app/controllers/commentscontroller.php
 * 
 */
namespace App\Controllers\CommentsController;
use App\Model\CommentsModel;

function storeAction(\PDO $conn){
    include_once '../app/models/commentsModel.php';
    $id = CommentsModel\insertOne($conn);

    // header('location: ?postID=' . $_POST['post_id']);
    GLOBAL $content;
    ob_start();
    include '../app/views/comments/store.php';
    $content = ob_get_clean();
}

?>
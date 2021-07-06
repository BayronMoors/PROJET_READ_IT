<?php
namespace App\Controller\PostsController;
use App\Model\AuthorModel;
use App\Model\TagsModel;
use App\Model\CommentsModel;
use App\Model\PostsModel;
use App\Model\SearchModel;


/**
 * 
 *  ./app/controllers/postsController.php
 * 
 */

 /**
  * indexAction
  *
  * @param \PDO $conn
  * @return void
  */
 function indexAction(\PDO $conn){
    include_once "../app/models/postsModel.php";
    $posts = PostsModel\findAll($conn);


    GLOBAL $content;
    ob_start();
    include "../app/views/posts/index.php";
    $content = ob_get_clean();
 }

 /**
  * showAction
  *
  * @param \PDO $conn
  * @param integer $id
  * @return void
  */
 function showAction(\PDO $conn, int $id){
   include_once "../app/models/postsModel.php";
   $post = PostsModel\findOneById($conn, $id);

   include_once "../app/models/tagsModel.php";
   $tags = TagsModel\findAllByPostId($conn, $id);

   include_once "../app/models/authorModel.php";
   $author = AuthorModel\findOneById($conn, $post['author_id']);

   include_once "../app/models/commentsModel.php";
   $comments = CommentsModel\findAllByPostId($conn, $id);

   GLOBAL $content;
   ob_start();
   include "../app/views/posts/show.php";
   $content = ob_get_clean();
 }

/**
 * contactAction
 *
 * @return void
 */
 function contactAction(){
  GLOBAL $content;
  ob_start();
  include "../app/views/posts/contact.php";
  $content = ob_get_clean();
 }

/**
 * indexByTagAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
 function indexByTagAction(\PDO $conn, int $id){
  include_once "../app/models/postsModel.php";
  $posts = PostsModel\findByTagId($conn, $id);


  GLOBAL $content;
  ob_start();
  include "../app/views/posts/index.php";
  $content = ob_get_clean();
 }

/**
 * searchAction
 *
 * @param \PDO $conn
 * @param string $content
 * @return void
 */
 function searchAction(\PDO $conn, string $content) {
  require_once '../app/models/searchModel.php';
  $posts = SearchModel\findAll($conn, $content);

  GLOBAL $content;
  ob_start();
  include '../app/views/posts/index.php';
  $content = ob_get_clean();
}
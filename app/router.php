<?php
use 
App\Controller\PostsController;
/**
 * 
 *  ./app/router.php
 * 
 */

 if(isset($_GET['postID'])){
    include_once "../app/controllers/postsController.php";
    PostsController\showAction($conn,$_GET['postID'] );
 }
 else if(isset($_GET['tagID'])){
   include_once "../app/controllers/postsController.php";
   PostsController\indexByTagAction($conn,$_GET['tagID'] );
 }
 else if(isset($_GET['contact'])){
    include_once "../app/controllers/postsController.php";
    PostsController\contactAction();
 }
 else{
     include_once "../app/controllers/postsController.php";
     PostsController\indexAction($conn);
 }


?>



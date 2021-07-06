<?php

use
  App\Controller\PostsController;
use
  App\Controllers\categorieController;
use App\Controller\SearchController;

use App\Controllers\CommentsController;

/**
 * 
 *  ./app/router.php
 * 
 */

if (isset($_GET['postID'])) {
  include_once "../app/controllers/postsController.php";
  PostsController\showAction($conn, $_GET['postID']);
} 
else if (isset($_GET['tagID'])) {
  include_once "../app/controllers/postsController.php";
  PostsController\indexByTagAction($conn, $_GET['tagID']);
} 
else if (isset($_GET['categorieID'])) {
  include_once "../app/controllers/categorieController.php";
  categorieController\indexAction($conn, $_GET['categorieID']);
} 
else if (isset($_GET['contact'])) {
  include_once "../app/controllers/postsController.php";
  PostsController\contactAction();
} 
else if (isset($_GET['comments']) and $_GET['comments'] == 'add') {
  include_once "../app/controllers/commentsController.php";
  CommentsController\storeAction($conn);
} 
else if (isset($_GET['search'])) {
  include_once "../app/controllers/postsController.php";
  PostsController\searchAction($conn, $_GET['search']);
} 
else {
  include_once "../app/controllers/postsController.php";
  PostsController\indexAction($conn);
}

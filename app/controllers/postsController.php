<?php

/**
 * 
 *  ./app/controllers/postsController.php
 * 
 */

 /**
  * indexAction
  *
  * @param PDO $conn
  * @return void
  */
 function indexAction(PDO $conn){
    include_once "../app/models/postsModel.php";
    $posts = findAll($conn);


    GLOBAL $content;
    ob_start();
    include "../app/views/posts/index.php";
    $content = ob_get_clean();
 }

 /**
  * showAction
  *
  * @param PDO $conn
  * @param integer $id
  * @return void
  */
 function showAction(PDO $conn, int $id){
   include_once "../app/models/postsModel.php";
   $post = getOneById($conn, $id);

   include_once "../app/models/tagsModel.php";
   $tags = findAllByPostId($conn, $id);

   include_once "../app/models/authorModel.php";
   $author = getAuthorByPostId($conn, $id);

   include_once "../app/models/commentsModel.php";
   $comments = getCommentsByPostId($conn, $id);

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
 * @param PDO $conn
 * @param integer $id
 * @return void
 */
 function indexByTagAction(PDO $conn, int $id){
  include_once "../app/models/postsModel.php";
  $posts = findByTagId($conn, $id);


  GLOBAL $content;
  ob_start();
  include "../app/views/posts/index.php";
  $content = ob_get_clean();
 }
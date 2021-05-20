<?php

/**
 * 
 *  ./app/router.php
 * 
 */

 if(isset($_GET['postID'])){
    include_once "../app/controllers/postsController.php";
    showAction($conn,$_GET['postID'] );
 }
 else if(isset($_GET['contact'])){
    include_once "../app/controllers/postsController.php";
    contactAction();
 }
 else{
     include_once "../app/controllers/postsController.php";
     indexAction($conn);
 }

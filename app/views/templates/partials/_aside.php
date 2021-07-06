<?php 
/**
 * 
 * ./app/views/templates/partials/_aside.php
 * 
 */ 
?>

<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="?" method="get" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" name="search" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <!-- CATEGORIES ################################ -->

            <?php include_once '../app/models/categoriesModel.php'; 
            $categories = \App\Models\CategoriesModel\findAll($conn);
            include '../app/views/categories/_index.php';
            ?>


            </div> 
              <!-- RECENT################################ -->
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php include_once '../app/models/postsModel.php'; 
              $posts=\App\Model\PostsModel\findAll($conn, 3);
              include '../app/views/posts/_recent.php';
              ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
              <?php include_once '../app/models/tagsModel.php'; 
              $tags=\App\Model\TagsModel\findAll($conn);
              include '../app/views/tags/_index.php';
              ?>

              </div>
            </div>

          </div>

        </div>
      </div>
<?php

/**
 * 
 *  ./app/views/posts/show.php
 * 
 */

?>

<div class="col-lg-8 ftco-animate">
    <p class="mb-5">
        <img src="assets/images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
    </p>

    <h1 class="mb-3 h1"><?php echo $post['title'] ?></h1>
    <?php echo $post['content'] ?>
    <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
    <?php include "../app/views/tags/_index.php"; ?>


        </div>
    </div>

    <div class="about-author d-flex p-4 bg-light">
        <div class="bio mr-5">
            <img src="./assets/images/<?php echo $author['image']; ?>" alt="Image placeholder" class="img-fluid mb-4">
        </div>
        <div class="desc">
            <h3><?php echo $author['lastname']; ?> <?php echo $author['firstname']; ?></h3>
            <p><?php echo $author['biography']; ?></p>
        </div>
    </div>


    <div class="pt-5 mt-5">
    <?php include "../app/views/comments/_index.php"; ?>
        <!-- END comment-list -->

        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="p-5 bg-light" method="post">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="postId" value="4" />
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>
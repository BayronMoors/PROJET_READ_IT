<?php
/**
 * 
 * ./app/views/tags/_index.php
 * 
 */
?>
        <?php foreach($tags as $tag): ?>
            <a href="?tagID=<?php echo $tag['id'] ?>" class="tag-cloud-link"><?php echo $tag['name'] ?></a>
        <?php endforeach; ?>
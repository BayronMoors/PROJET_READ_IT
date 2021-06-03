<?php
namespace App\Model\PostsModel;

/**
 * 
 *  ./app/models/postsModel.php
 * 
 */

 /**
  * findAll
  *
  * @param PDO $conn
  * @return array
  */
 function findAll(\PDO $conn) :array {
    $sql="SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 9;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);    
}

function findOneByID(\PDO $conn, int $id):array{
      $sql = "SELECT *
              FROM posts
              WHERE id = :id;";
      $rs = $conn->prepare($sql);
      $rs->bindValue(":id",$id, \PDO::PARAM_INT);
      $rs->execute();
      return $rs->fetch(\PDO::FETCH_ASSOC);
}

function findByTagId(\PDO $conn, int $id):array{
      $sql ="SELECT *
      FROM posts p
      JOIN posts_has_tags pht ON pht.post_id = p.id
      WHERE pht.tag_id = :id
      LIMIT 9;";

      $rs = $conn->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
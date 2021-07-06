<?php  
/**
 * 
 *  ./app/models/searchModel.php
 * 
 */

 namespace App\Model\SearchModel;

 function findAll(\PDO $conn, string $content):array {
    $sql="SELECT *
          FROM posts p
          WHERE LOWER(p.title) LIKE CONCAT('%', :content, '%') OR LOWER(p.content) LIKE CONCAT('%', :content, '%')
          LIMIT 9;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':content', $content, \PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
 }
<?php
namespace App\Model\CommentsModel;

/**
 * 
 *  ./app/views/models/commentsModel
 * 
 */

function findAllByPostId(\PDO $conn, int $id): array
{
    $sql = "SELECT *
            FROM comments 
            WHERE post_id = :id
            ORDER BY created_at DESC;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(":id", $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


function insertOne(\PDO $conn) {
    $sql = "INSERT INTO comments
            SET pseudo = :pseudo,
                content = :content,
                post_id = :post_id,
                created_at = NOW() ;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':pseudo',  $_POST['pseudo'],  \PDO::PARAM_STR);
    $rs->bindValue(':content', $_POST['content'], \PDO::PARAM_STR);
    $rs->bindValue(':post_id', $_POST['post_id'], \PDO::PARAM_INT);
    $rs->execute();
    return intval($conn->lastInsertId());
}
<?php

/**
 * 
 *  ./app/views/models/commentsModel
 * 
 */

function getCommentsByPostId(PDO $conn, int $id): array
{
    $sql = "SELECT c.id, c.pseudo, c.content, c.created_at
            FROM comments c
            JOIN posts p ON p.id = c.post_id
            WHERE c.post_id = :id;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(":id", $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

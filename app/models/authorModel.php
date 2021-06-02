<?php

function getAuthorByPostId(PDO $conn, int $id): array
{
    $sql = "SELECT a.lastname, a.firstname, a.biography, a.image
    FROM posts p
    JOIN authors a ON a.id = p.author_id
    WHERE p.id = :id;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}

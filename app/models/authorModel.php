<?php
namespace App\Model\AuthorModel;

function findOneById(\PDO $conn, int $id): array
{
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}

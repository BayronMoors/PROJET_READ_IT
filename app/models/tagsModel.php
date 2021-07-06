<?php
namespace App\Model\TagsModel;

/**
 * 
 *  ./app/models/tagsModel.php
 * 
 */

function findAll(\PDO $conn) :array{
    $sql = "SELECT *
    FROM tags
    ORDER BY name ASC";

$rs = $conn->query($sql);
return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findAllByPostId(\PDO $conn, int $id):array
{
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pht ON pht.tag_id = t.id
            WHERE pht.post_id = :id;";

    $rs = $conn->prepare($sql);
    $rs->bindValue(":id", $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

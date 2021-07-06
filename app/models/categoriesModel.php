<?php  
/**
 * 
 * 
 *  ./app/models/categoriesModel.php
 * 
 */

 namespace App\Models\CategoriesModel;

/**
 * 
 *
 * @param \PDO $conn
 * @return array
 */
function findAll(\PDO $conn) :array{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC";
    
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
};


function findAllByCategorieId(\PDO $conn, int $id):array{
    $sql = "SELECT *
            FROM posts p
            WHERE p.category_id = :id
            LIMIT 9;";
    
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
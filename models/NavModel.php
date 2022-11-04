<?php


class NavModel extends BaseModel
{
    // select all in the category table
    public function allCat()
    {
        if ($stmt = $this->pdo->prepare('SELECT * FROM category')) {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }


    // binds the variable catId with the database catId
    public function allVideos($catId)
    {
        if ($stmt = $this->pdo->prepare('SELECT * FROM videos WHERE catId = :catId')) {
            $stmt->bindParam(":catId", $catId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
}
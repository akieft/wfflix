<?php


class RecentModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function recentVideos()
    {
        if ($stmt = $this->pdo->prepare('SELECT * FROM videos ORDER BY createdAt DESC LIMIT 4'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
}
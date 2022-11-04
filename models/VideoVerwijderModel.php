<?php


class VideoVerwijderModel extends BaseModel
{
    private int $videoId, $catId;
    private string $titel, $link, $beschrijving;
    private $created;

    public function __construct()
    {
        parent::__construct();
    }

    // select all video's
    public function allVideos()
    {
        if ($stmt = $this->pdo->prepare('SELECT videoId, titel FROM videos'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    // deleting a video from the database
    public function verwijderen(int $id)
    {
        // make new query to delete a video his comments
        $query = 'DELETE FROM comment WHERE videoId = :videoId';

        // making prepare statement  and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // binding parameters
            $stmt->bindParam(":videoId", $id, PDO::PARAM_INT);

            // execute the statement
            $stmt->execute();
        endif;

        // make new query to delete a video
        $query = 'DELETE FROM videos WHERE videoId = :videoId';

        // making prepare statement  and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // binding parameters
            $stmt->bindParam(":videoId", $id, PDO::PARAM_INT);

            // execute the statement
            $stmt->execute();
        endif;
    }

    /**
     * @return int
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    /**
     * @param string $beschrijving
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

}
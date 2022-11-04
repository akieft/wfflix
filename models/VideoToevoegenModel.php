<?php


class VideoToevoegenModel extends BaseModel
{

    private int $videoId, $catId;
    private string  $titel, $link, $beschrijving;
    private $createdAt;

    public function __construct()

    {
        parent::__construct();
    }

    // selecting all categories
    public function allCat()
    {
        if ($stmt = $this->pdo->prepare('SELECT * FROM category'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    // adding a video to the database
    public function toevoeg(string $link, string $titel, string $beschrijving, int $catId)
    {
            // make new query to insert
            $query = 'INSERT INTO videos (link, titel, beschrijving, catId) VALUES (:link, :titel, :beschrijving, :catId)';

            // making prepare statement and execute statement
            if ($stmt = $this->pdo->prepare($query))  :

                // binding parameters
                $stmt->bindParam(":link", $link, PDO::PARAM_STR);
                $stmt->bindParam(":titel", $titel, PDO::PARAM_STR);
                $stmt->bindParam(":beschrijving", $beschrijving, PDO::PARAM_STR);
                $stmt->bindParam(":catId", $catId, PDO::PARAM_INT);

                // execute statement
                $stmt->execute();

                endif;
    }

    /**
     * @return int
     */
    public function getVideoId(): int
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     */
    public function setVideoId(int $videoId): void
    {
        $this->videoId = $videoId;
    }

    /**
     * @return int
     */
    public function getCatId(): int
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     */
    public function setCatId(int $catId): void
    {
        $this->catId = $catId;
    }

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel(string $titel): void
    {
        $this->titel = $titel;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getBeschrijving(): string
    {
        return $this->beschrijving;
    }

    /**
     * @param string $beschrijving
     */
    public function setBeschrijving(string $beschrijving): void
    {
        $this->beschrijving = $beschrijving;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

}
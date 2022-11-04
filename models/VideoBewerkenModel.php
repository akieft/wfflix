<?php


class VideoBewerkenModel extends BaseModel
{

    // Define variables
    private int $videoId;
    private string $link, $titel, $beschrijving;
    private $createdAt;

    // Connect to the database
    public function __construct()
    {
        parent::__construct();
    }

    // Select all
    public function allVideos()
    {
        if ($stmt = $this->pdo->prepare('SELECT videoId, titel FROM videos'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    // change a video
    public function updateVideos(string $link, string $title, string $beschrijving, int $videoId)
    {
        // Make new query to update
        $query = 'UPDATE videos SET  link = :link, titel = :title, beschrijving = :beschrijving WHERE videoId = :videoId';

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // Bind the paramaters
            $stmt->bindParam(':link', $link, PDO::PARAM_STR);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->bindParam(':beschrijving', $beschrijving, PDO::PARAM_STR);
            $stmt->bindParam(':videoId', $videoId, PDO::PARAM_INT);

            // Execute the statement
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
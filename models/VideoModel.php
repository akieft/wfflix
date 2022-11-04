<?php


class VideoModel extends BaseModel
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

    // function that selects videos when there is a video id
    public function videoSelect(int $videoId)
    {
        $query = "SELECT * FROM videos WHERE videoId = :videoId";

        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':videoId', $videoId, PDO::PARAM_INT);
            $stmt->execute();

            // fetching the data from the database
            $data = $stmt->fetch();
            if ($data !== false) {
                $this->videoId = $data['videoId'];
                $this->link = $data['link'];
                $this->titel = $data['titel'];
                $this->beschrijving = $data['beschrijving'];
                $this->createdAt = $data['createdAt'];
                $this->catId = $data['catId'];
            }
        endif;
    }

    // getters & setters
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
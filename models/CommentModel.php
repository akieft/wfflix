<?php


class CommentModel extends BaseModel
{
    // Define variables
    private int $commentId, $klantId, $videoId;
    private string $beschrijving, $gebruikersnaam;
    private $createdAt;

    public function __construct()
    {
        parent:: __construct();
    }

    // function that selects videos when there is a video id
    public function commentSelect(int $videoId)
    {
        $query = "SELECT * FROM comment WHERE videoId = :videoId";

        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':videoId', $videoId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        endif;
    }

    public function userSelect(int $klantId)
    {
        $query = "SELECT gebruikersnaam FROM users WHERE klantId = :klantId";

        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':klantId', $klantId, PDO::PARAM_INT);
            $stmt->execute();
            if ($user = $stmt->fetch()) {
                $this->gebruikersnaam = $user['gebruikersnaam'];
            }
        endif;
    }

    public function insertComment($beschrijving, $klantId, $videoId)
    {
        // preparing a query
        $query = "INSERT INTO comment (beschrijving, klantId, videoId) VALUES (:beschrijving, :klantId, :videoId)";

        // making prepare statement and execute statement
        if ($stmt = $this->pdo->prepare($query))  :

            // binding parameters
            $stmt->bindParam(":beschrijving", $beschrijving, PDO::PARAM_STR);
            $stmt->bindParam(":klantId", $klantId, PDO::PARAM_INT);
            $stmt->bindParam(":videoId", $videoId, PDO::PARAM_INT);

            // execute statement
            $stmt->execute();

        endif;
    }

    /**
     * @return int
     */
    public function getCommentId(): int
    {
        return $this->commentId;
    }

    /**
     * @param int $commentId
     */
    public function setCommentId(int $commentId): void
    {
        $this->commentId = $commentId;
    }

    /**
     * @return int
     */
    public function getKlantId(): int
    {
        return $this->klantId;
    }

    /**
     * @param int $klantId
     */
    public function setKlantId(int $klantId): void
    {
        $this->klantId = $klantId;
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
     * @return string
     */
    public function getGebruikersnaam(): string
    {
        return $this->gebruikersnaam;
    }

    /**
     * @param string $gebruikersnaam
     */
    public function setGebruikersnaam(string $gebruikersnaam): void
    {
        $this->gebruikersnaam = $gebruikersnaam;
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
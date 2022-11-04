<?php


class CatBewerkModel extends BaseModel
{
    //Define variables
    private int $catId;
    private string $naam, $beschrijving;

    //Connect to the database
    public function __construct()
    {
        parent::__construct();
    }

    // Select all
    public function allCategories()
    {
        if ($stmt = $this->pdo->prepare('SELECT catId, naam FROM category'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
            die(var_dump($stmt->errorInfo()));
        }
    }

    //change a category
    public function updateCategories(string $naam, string $beschrijving, int $catId)
    {
        // Make new query to update
        $query = 'UPDATE category SET  naam = :naam, Beschrijving = :beschrijving WHERE catId = :catId';

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

        // Bind the paramaters
        $stmt->bindParam(':naam', $naam, PDO::PARAM_STR);
        $stmt->bindParam(':beschrijving', $beschrijving, PDO::PARAM_STR);
        $stmt->bindParam(':catId', $catId, PDO::PARAM_INT);

        // Execute the statement
        $stmt->execute();
        endif;
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
    public function getNaam(): string
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
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


}

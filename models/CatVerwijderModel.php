<?php


class CatVerwijderModel extends BaseModel
{
    private int $catId;
    private string $naam, $beschrijving;

    public function __construct()
    {
        parent:: __construct();
    }

    // select all categories
    public function allCategories()
    {
        if ($stmt = $this->pdo->prepare('SELECT catId, naam FROM category'))
        {
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    // deleting a category from the database
    public function catverwijderen(int $id)
    {
        // make new query to delete a category
        $query = 'DELETE FROM category WHERE catId = :catId';

        // making prepare statement and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // binding parameters
            $stmt->bindParam(":catId", $id, PDO::PARAM_INT);

            // execute the statement
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
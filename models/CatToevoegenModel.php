<?php


class CatToevoegenModel extends BaseModel
{

    private string $naam, $beschrijving;

    public function __construct()

    {
        parent::__construct();
    }

    // adding a category to the database
    public function catadd(string $naam, string $beschrijving)
    {
        // make new query to insert
        $query = 'INSERT INTO category (naam, beschrijving) VALUES (:naam, :beschrijving)';

        // making prepare statement and execute statement
        if ($stmt = $this->pdo->prepare($query))  :

            // binding parameters
            $stmt->bindParam(":naam", $naam, PDO::PARAM_STR);
            $stmt->bindParam(":beschrijving", $beschrijving, PDO::PARAM_STR);

            // execute statement
            $stmt->execute();

        endif;
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
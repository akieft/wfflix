<?php


class ProfielModel extends BaseModel
{
    // Define variables
    private int $klantId;
    private string $voornaam, $tussenvoegsel, $achternaam, $email, $gebruikersnaam, $wachtwoord;
    private $createdAt;

    // Connect to the database
    public function __construct()
    {
        parent::__construct();
    }

    // function that collects profile info when there is a klant id
    public function profielSelect(int $klantId)
    {
        $query = "SELECT * FROM users WHERE klantId = :klantId";

        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':klantId', $klantId, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch();

            // fetching the data from the database
            if ($data !== false) {
                $this->klantId = $data['klantId'];
                $this->voornaam = $data['voornaam'];
                $this->tussenvoegsel = $data['tussenvoegsel'];
                $this->achternaam = $data['achternaam'];
                $this->email = $data['email'];
                $this->createdAt = $data['createdAt'];
                $this->gebruikersnaam = $data['gebruikersnaam'];
                $this->wachtwoord = $data['wachtwoord'];
            }
        endif;
    }

    // getters & setters
    /**
     * @return int
     */
    public function getKlantId()
    {
        return $this->klantId;
    }

    /**
     * @param int $klantId
     */
    public function setKlantId($klantId)
    {
        $this->klantId = $klantId;
    }

    /**
     * @return string
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param string $voornaam
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return string
     */
    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    /**
     * @param string $tussenvoegsel
     */
    public function setTussenvoegsel($tussenvoegsel)
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param string $achternaam
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }

    /**
     * @param string $gebruikersnaam
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    /**
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * @param string $wachtwoord
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
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
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

}
<?php


class UserModel extends BaseModel
{
    // Define variables
    private int $klantId, $medId;
    private string $voornaam, $tussenvoegsel, $achternaam, $email, $gebruikersnaam, $wachtwoord;
    private $createdAt;

    // Connect to the database
    public function __construct()
    {
        parent::__construct();
    }

    // function to register new user
    public function registration(string $voornaam, string $tussenvoegsel, string $achternaam, string $email, string $gebruikersnaam, string $wachtwoord)
    {

        // Make new query to insert
        $query = 'INSERT INTO users (voornaam, tussenvoegsel, achternaam, email, gebruikersnaam, wachtwoord) VALUES (:voornaam, :tussenvoegsel, :achternaam, :email, :gebruikersnaam, :wachtwoord)';

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // Bind the paramaters
            $stmt->bindParam(':voornaam', $voornaam, PDO::PARAM_STR);
            $stmt->bindParam(':tussenvoegsel', $tussenvoegsel, PDO::PARAM_STR);
            $stmt->bindParam(':achternaam', $achternaam, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':gebruikersnaam', $gebruikersnaam, PDO::PARAM_STR);
            $stmt->bindParam(':wachtwoord', $wachtwoord, PDO::PARAM_STR);

            // Execute the statement
            $stmt->execute();

//                die(var_dump($stmt->errorInfo()));
        endif;
    }

    // login function for users
    public function login(string $email, string $wachtwoord)
    {
        // Make new query to insert
        $query = "SELECT * FROM users WHERE email = :email AND wachtwoord = :password";

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // Bind the paramaters
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $wachtwoord, PDO::PARAM_STR);

            // Execute the statement
            $stmt->execute();
            if ($user = $stmt->fetch()) {
                $this->klantId = $user['klantId'];
                $this->tussenvoegsel = $user['tussenvoegsel'];
                $this->achternaam = $user['achternaam'];
                $this->email = $user['email'];
                $this->createdAt = $user['createdAt'];
                $this->gebruikersnaam = $user['gebruikersnaam'];
                $this->wachtwoord = $user['wachtwoord'];
            }
        endif;
    }

    // login function for admin
    public function admin(string $email, string $wachtwoord)
    {
        // Make new query to insert
        $query = "SELECT * FROM admin WHERE email = :email AND wachtwoord = :password";

        // Prepare and execute statement
        if ($stmt = $this->pdo->prepare($query)) :

            // Bind the paramaters
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $wachtwoord, PDO::PARAM_STR);

            // Execute the statement
            $stmt->execute();
            if ($user = $stmt->fetch()) {
                $this->medId = $user['medId'];
                $this->tussenvoegsel = $user['tussenvoegsel'];
                $this->achternaam = $user['achternaam'];
                $this->email = $user['email'];
                $this->createdAt = $user['createdAt'];
                $this->gebruikersnaam = $user['gebruikersnaam'];
                $this->wachtwoord = $user['wachtwoord'];
            }
        endif;
    }

    // checks if admin exists
    public function existsAdmin()
    {
        return isset($this->medId);
    }

    // checks if users exists
    public function existsKlant()
    {
        return isset($this->klantId);
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
    public function getMedId(): int
    {
        return $this->medId;
    }

    /**
     * @param int $medId
     */
    public function setMedId(int $medId): void
    {
        $this->medId = $medId;
    }

    /**
     * @return string
     */
    public function getVoornaam(): string
    {
        return $this->voornaam;
    }

    /**
     * @param string $voornaam
     */
    public function setVoornaam(string $voornaam): void
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return string
     */
    public function getTussenvoegsel(): string
    {
        return $this->tussenvoegsel;
    }

    /**
     * @param string $tussenvoegsel
     */
    public function setTussenvoegsel(string $tussenvoegsel): void
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    /**
     * @return string
     */
    public function getAchternaam(): string
    {
        return $this->achternaam;
    }

    /**
     * @param string $achternaam
     */
    public function setAchternaam(string $achternaam): void
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
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
     * @return string
     */
    public function getWachtwoord(): string
    {
        return $this->wachtwoord;
    }

    /**
     * @param string $wachtwoord
     */
    public function setWachtwoord(string $wachtwoord): void
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
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

}
<?php 


class User 
{

    protected string $name;
    protected string $password;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function name($name = null)
    {
        if(!is_null($name)) $this->name = $name;
        return $this->name;
    }

    public function password($password = null)
    {
        if(!is_null($password)) $this->password = $password;
        return $this->password;
    }

    public function login()
    {
        $query = "SELECT * FROM users WHERE name = :name";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if(!$user) return false;
        return $user;
    }
}
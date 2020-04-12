<?php 
require_once './config/db.php';
class Project {
    public $id;
    public $name;
    public $languages;
    public $description;
    public $image;
    public $github;
    public $date;

    public $db;

    function __construct(){
        $this->db = Database::connect();
    }

    function getAll(){
        $sql = "SELECT * FROM projects";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $projects = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $projects;
    }

    public function getOne() {
        $sql = "SELECT * FROM projects WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(':id' => $this->getId()));
        $project = $stmt->fetch(PDO::FETCH_OBJ);
       

        return $project;
    }

    public function save(){
        $sql = "INSERT INTO projects VALUES (null, :name, :languages, :description, :image, :github, CURDATE())";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            ':name' => $this->getName(),
            ':languages' => $this->getLanguages(),
            ':description' => $this->getDescription(),
            ':image' => $this->getImage(),
            ':github' => $this->getGithub(),
        ));
        
        $result = false;
        if($stmt){
            $result = true;
        }
        return $result;
    }





    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of languages
     */ 
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set the value of languages
     *
     * @return  self
     */ 
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of github
     */ 
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set the value of github
     *
     * @return  self
     */ 
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }
}
<?php 
require_once './config/db.php';
class Project {
    public $id;
    public $name;
    public $languages;
    public $description;
    public $image;
    public $github;
    public $web;
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
        $sql = "INSERT INTO projects VALUES (null, :name, :languages, :description, :image, :github, :web, CURDATE())";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            ':name' => $this->getName(),
            ':languages' => $this->getLanguages(),
            ':description' => $this->getDescription(),
            ':image' => $this->getImage(),
            ':github' => $this->getGithub(),
            ':web' => $this->getWeb()
        ));
        
        $result = false;
        if($stmt){
            $result = true;
        }
        return $result;
    }

    public function lastIdInsert(){
        $sql = "SELECT LAST_INSERT_ID()  as 'project'";
        $stmt= $this->db->prepare($sql);
        $stmt->execute();
        $id_project = $stmt->fetch(PDO::FETCH_OBJ)->project;

        return $id_project;
        
    }

    public function delete(){
        $query = "DELETE FROM images WHERE id_project = :id";
        $stmt = $this->db->prepare($query);
        $id = $this->getId();
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $sql = "DELETE FROM projects WHERE id = :id ";
        $stmt = $this->db->prepare($sql);
        $id = $this->getId();
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = false;
        if ($stmt) {
            $result = true;
        }
        return $result;
    }





   
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
 
    public function getName()
    {
        return $this->name;
    }

  
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getLanguages()
    {
        return $this->languages;
    }

 
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

  
    public function getDescription()
    {
        return $this->description;
    }

 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    
    public function getGithub()
    {
        return $this->github;
    }


    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }


    public function getWeb()
    {
        return $this->web;
    }

    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }
}
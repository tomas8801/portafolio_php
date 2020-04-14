<?php 
require_once './config/db.php';
class Image {
    public $id;
    public $id_project;
    public $image_path;

    public $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getProjectImages(){
        $sql = "SELECT * FROM images WHERE id_project = :id_project";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(':id_project' => $this->getId_project()));
        $images = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $images;
    }

    public function uploadProjectImages(){
        $sql = "INSERT INTO images VALUES (null, :id_project, :image_path)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            ':id_project' => $this->getId_project(),
            ':image_path' => $this->getImage_path(),
        ));
        $result = false;
        if($stmt){
            $result = true;
        }
        return $result;
    }
    

    /**
     * Get the value of id_project
     */ 
    public function getId_project()
    {
        return $this->id_project;
    }

    /**
     * Set the value of id_project
     *
     * @return  self
     */ 
    public function setId_project($id_project)
    {
        $this->id_project = $id_project;

        return $this;
    }

    /**
     * Get the value of image_path
     */ 
    public function getImage_path()
    {
        return $this->image_path;
    }

    /**
     * Set the value of image_path
     *
     * @return  self
     */ 
    public function setImage_path($image_path)
    {
        $this->image_path = $image_path;

        return $this;
    }
}
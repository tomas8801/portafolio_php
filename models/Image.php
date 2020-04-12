<?php 

class Image {
    private $id;
    private $id_project;
    private $image_path;

    private $db;

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
            ':id_project' => $this->getId_project,
            ':image_path' => $this->image_path
        ));
        $result = false;
        if($result){
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
}
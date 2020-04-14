<?php 
require_once 'models/Project.php';
require_once 'models/Image.php';

class projectController{

    public function index(){
        $project = new Project();
        $projects = $project->getAll();

        require_once 'views/index.php';
    }

    public function upload(){
        require_once 'views/project/upload.php';
    }

    public function save(){
        if(isset($_POST['submit'])){
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $languages = isset($_POST['languages']) ? $_POST['languages'] : false;
            $description = isset($_POST['description']) ? $_POST['description'] : false;
            $github = isset($_POST['github']) ? $_POST['github'] : false;


            
            if($name && $languages && $description && $github){
                $pro = new Project();
                $pro->setName($name);                
                $pro->setDescription($description);
                $pro->setGithub($github);

                #GUARDAMOS LENGUAJES
                $languages = implode('-', $languages);
                $pro->setLanguages(strtoupper($languages));

                #GUARDAMOS LA IMAGEN PRINCIPAL
                $file = $_FILES['image'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){
                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images', 0007, true);
                    }
                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    $pro->setImage($filename);
                }
                $save = $pro->save();

                if($save){
                    #GUARDAMOS LAS OTRAS IMAGENES
                    $files = $_FILES['images'];
                    $project_id = $pro->lastIdInsert();
                    $project_id = (int)$project_id;

                    if(!empty($files['name'][0])){  
                        foreach ($files['name'] as $position => $fileName) {
                            $images = new Image();
                            $images->setId_project($project_id);
                            $file_tmp = $files['tmp_name'][$position];
                            if(!is_dir('uploads/images')){
                                mkdir('uploads/images', 0007, true);
                            }
                            move_uploaded_file($file_tmp, 'uploads/images/'.$fileName);
                            
                            $images->setImage_path($fileName);
                            $saveImages = $images->uploadProjectImages();                         
                        }

                        if($saveImages){
                            echo 'Se guardo';
                        }else {
                            echo 'No se guardo';
                        }
                    }

                }
            }
        }
    }


    public function single(){
        if(isset($_GET['id'])){
            $project_id = $_GET['id'];

            $pro = new Project();
            $pro->setId($project_id);
            $project = $pro->getOne();

            $img = new Image();
            $img->setId_project($project_id);
            $images = $img->getProjectImages();

            require_once 'views/project/single.php';
        }

    }

    public function management(){
        $pro = new Project();
        $projects = $pro->getAll();

        require_once 'views/project/management.php';
    }

    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $pro = new Project();
            $pro->setId($id);
            $delete = $pro->delete();

            if($delete){
                $_SESSION['delete'] = 'Se eliminó correctamente';
                header('Location: '. url_base . 'project/management');
            }else {
                $_SESSION['delete'] = 'Erro al eliminar';
            }
        }

        header('Location: '. url_base . 'project/management');
    }
    
}
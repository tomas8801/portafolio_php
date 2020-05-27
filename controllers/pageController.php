<?php
require_once 'models/Project.php';

class pageController {
    public function index(){
        $project = new Project();
        $projects = $project->getAll();

        require_once 'views/project/projects.php';
    }

    public function contact(){
        require_once 'views/contact.php';
    }

    public function admin(){
        require_once 'views/admin/login.php';
    }

}
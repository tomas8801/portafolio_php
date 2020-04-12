<?php 
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/db.php';



require_once 'views/includes/header.php';

if(isset($_GET['controller'])){

    $nombreControlador = $_GET['controller'].'Controller';

}else if(!isset($_GET['controller']) && !isset($_GET['action'])) {

    $nombreControlador = default_controller;
    

}else{

    echo 'Error';
    exit();

}

if(class_exists($nombreControlador)){

    $controller = new $nombreControlador();
    
    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){

        $action = $_GET['action'];
        $controller->$action();
        
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){

        $action_default = default_action;
        $controller->$action_default();
        
    }else {

        echo 'Error';
    }

}else {

    echo 'Error';
}





require_once 'views/includes/footer.php';
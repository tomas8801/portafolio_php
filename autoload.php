<?php 
//AUTOCARGA DE CONTROLADORES
function autoloadController($classname){
    include 'controllers/'.$classname.'.php';
}

spl_autoload_register('autoloadController');
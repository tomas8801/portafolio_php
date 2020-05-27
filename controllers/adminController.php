<?php 

class adminController {

    public function login(){
        if(isset($_POST['submit'])){
            $name =  isset($_POST['name']) ? preg_replace( "#[^\w]#", "", $_POST['name'] ) : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            $errores = [];
            $validado = false;
            if(!empty($name) && !empty($password)){
                $validado = true;

            }else {
                $errores['no_validado'] = 'failed';
            }

            if(count($errores) == 0){

                if($name == 'tomas8801' && $password == 'canallamania'){
                    $_SESSION['admin'] = true;
                    header('Location: '.url_base.'project/management');
                    
                }else {
                    header('Location: '.url_base);
                }          
            }else {
                $_SESSION['errores'] = $errores;
            }
            
        }
        

    }


    public static function logout(){
        if(isset($_SESSION['admin'])){
            $_SESSION['admin'] = null;
            unset($_SESSION['admin']);
            
        }
        header('Location: '.url_base);
    }
}
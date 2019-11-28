<?php
    class SecuredController{
        function __construct(){
            if($this->checkSessionAdminStarted() == false){
                $this->logout();
            }
        }

        function checkSessionAdminStarted(){
            session_start();
            if((isset($_SESSION["User"])) && ($_SESSION["Permisos"] == 1)){
                if(isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > 20000)){
                    return false;
                }
                $_SESSION['LAST_ACTIVITY'] = time();
                return true;
            }
            else{
                return false;
            }
        }

        function checkSessionStarted(){
            session_start();
            if(isset($_SESSION["User"])){
                if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 200)){
                    $this->logout();
                }
                $_SESSION['LAST_ACTIVITY'] = time();
            }
            else{
                header(LOGIN);
            }
        }

        function definirPermisos(){
            session_start();
            if(isset($_SESSION["User"])){//si hay usuario loggeado ya sabe que tiene que mostrar la opcion de poner comentarios tambien
                $permisos = $_SESSION["Permisos"];//si tenes permisos de admin podes comentar, puntuar, borrar/agregar imagenes
            }
            else{//si no hay usuario loggeado podes ver los cometarios y el puntaje pero no podes interactuar
                $permisos = -1;
            }
            return $permisos;
        }

        function logout(){
            session_start();
            session_destroy();
            header(HOME);
        }
    }
?>
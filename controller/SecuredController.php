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
                if(isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > 2000)){
                    return false;
                }
                $_SESSION['LAST_ACTIVITY'] = time();
                return true;
            }
            else{
                return false;
            }
        }

        function definirPermisos(){
            session_start();
            if(isset($_SESSION["User"])){
                if(isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > 2000)){
                    $this->logout();
                }
                else{
                    $permisos = $_SESSION["Permisos"];
                    $_SESSION['LAST_ACTIVITY'] = time();
                }
            }
            else{
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
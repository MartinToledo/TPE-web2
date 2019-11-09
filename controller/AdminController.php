<?php
    require_once "./view/AdminView.php";
    require_once "./model/LibroModel.php";
    require_once "./model/GeneroModel.php";
    require_once "SecuredController.php";

    class AdminController extends SecuredController{
        private $view;
        private $model;

        function __construct(){
            $this->view = new AdminView();
            $this->model = new libroModel();
        }

        function InsertAdmin(){
            $nombre = $_POST["nombreForm"];            
            $password = $_POST["passwordForm"];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->InsertarAdmin($nombre, $hash);

            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function VerAdmin($param){
            $Admin = $this->model->GetAdmin($param[0]);
            $this->view->MostrarAdmin($Admin);
        }

        function BorrarAdmin($param){
            $this->model->BorrarAdmin($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function ModificarAdmin($param){
            $nombre = $_POST["nombreForm"];
            $password = $_POST["passwordForm"];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->ModificarAdmin($nombre, $hash);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }
    }
?>
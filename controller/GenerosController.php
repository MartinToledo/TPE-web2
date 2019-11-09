<?php
    require_once "./view/GenerosView.php";
    require_once "./model/GeneroModel.php";
    require_once "SecuredController.php";

    class GenerosController extends SecuredController{
        private $view;
        private $model;

        function __construct(){
            $this->view = new GenerosView();
            $this->model = new GeneroModel();
        }

        function VerGeneros(){
            $Generos = $this->model->GetGeneros();
            $this->view->MostrarTodos($Generos);
        }

        function InsertGenero(){
            $nombre = $_POST["nombreForm"];

            $this->model->InsertarGenero($nombre);

            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function VerGenero($param){
            $Genero = $this->model->GetGenero($param[0]);
            $this->view->MostrarGenero($Genero);
        }

        function BorrarGenero($param){
            $this->model->BorrarGenero($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function ModificarGenero($param){
            $nombre = $_POST["nombreForm"];
            $this->model->ModifiGenero($param[0], $nombre);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }
    }
?>
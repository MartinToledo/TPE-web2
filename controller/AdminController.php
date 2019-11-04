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

        function Home(){
            $Libros = $this->model->GetLibros();
            $this->view->MostrarTodos($Libros);
        }

        function InsertLibro(){
            $titulo = $_POST["tituloForm"];
            $descripcion = $_POST["descripcionForm"];
            if(isset($_POST["completadaForm"])){
                $completada = 1;
            }
            else{
                $completada = 0;
            }

            $this->model->InsertarTarea($titulo, $descripcion, $completada);

            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function VerLibro($param){
            $Libro = $this->model->GetLibro($param[0]);
            $this->view->MostrarLibro($Libro);
        }

        function BorrarLibro($param){
            $this->model->BorrarTarea($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function CompletarTarea($param){
            $this->model->CompletarTarea($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }
    }
?>
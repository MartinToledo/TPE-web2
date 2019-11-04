<?php
    require_once "./view/LibrosView.php";
    require_once "./model/LibroModel.php";
    require_once "SecuredController.php";

    class LibrosController extends SecuredController{
        private $view;
        private $model;

        function __construct(){
            $this->view = new LibrosView();
            $this->model = new libroModel();
        }

        function Home(){
            $Libros = $this->model->GetLibros();
            $this->view->MostrarTodos($Libros);
        }

        function InsertLibro(){
            $titulo = $_POST["tituloForm"];
            $descripcion = $_POST["descripcionForm"];
            $autor = $_POST["autorForm"];
            $editorial = $_POST["editorialForm"];
            $edad = $_POST["edadForm"];            

            $this->model->InsertarLibro($titulo, $descripcion, $autor, $editorial, $edad);

            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function VerLibro($param){
            $Libro = $this->model->GetLibro($param[0]);
            $this->view->MostrarLibro($Libro);
        }

        function BorrarLibro($param){
            $this->model->BorrarLibro($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function ModificarLibro($param){
            $this->model->ModificarLibro($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }
    }
?>
<?php
    require_once "./view/LibrosView.php";
    require_once "./view/GenerosView.php";
    require_once "./model/LibroModel.php";
    require_once "./model/GeneroModel.php";
    require_once "SecuredController.php";

    class LibrosController extends SecuredController{
        private $viewLibro;
        private $viewGenero;
        private $modelLibro;
        private $modelGenero;
        private $modelImagenLibro;
        private $permisos;

        function __construct(){
            $this->viewLibro = new LibrosView();
            $this->viewGenero = new GenerosView();
            $this->modelLibro = new LibroModel();
            $this->modelGenero = new GeneroModel();
            $this->modelImagenLibro = new ImagenLibroModel();
            $this->permisos = $this->definirPermisos();
        }

        function Home(){
            $Libros = $this->modelLibro->GetLibros();
            $Titulo = "Todos Los Libros";
            $this->viewLibro->MostrarLibros($Libros, $Titulo, $this->permisos);
        }

        function VerLibro($param){
            $Libro = $this->modelLibro->GetLibro($param[0]);
            $imagenesLibro = $this->modelImagenLibro->GetImagenesByLibro($param[0]);
            $this->viewLibro->MostrarLibro($Libro, $imagenesLibro, $this->permisos);
        }

        function VerLibrosPorGenero($param){
            $Libros = $this->modelLibro->GetLibrosByGenero($param[0]);
            $Genero = $Libros[0]["nombre"];
            $this->viewLibro->MostrarLibros($Libros, $Genero, $this->permisos);
        }

        function VerGeneros(){
            $Generos = $this->modelGenero->GetGeneros();
            $Titulo = "Todos Los Generos";
            $this->viewGenero->MostrarGeneros($Generos, $Titulo, $this->permisos);
        }
    }
?>
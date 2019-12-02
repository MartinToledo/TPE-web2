<?php
    require_once "./view/AdminView.php";
    require_once "./model/LibroModel.php";
    require_once "./model/GeneroModel.php";
    require_once "./model/UsuarioModel.php";
    require_once "./model/ImagenLibroModel.php";
    require_once "./model/ComentarioModel.php";
    require_once "SecuredController.php";

    class AdminController extends SecuredController{
        private $view;
        private $modelLibro;
        private $modelGenero;
        private $modelUsuario;
        private $modelImagenLibro;
        private $modelComentario;
        private $permisos;

        function __construct(){
            parent::__construct();
            $this->view = new AdminView();
            $this->modelLibro = new LibroModel();
            $this->modelGenero = new GeneroModel();
            $this->modelUsuario = new UsuarioModel();
            $this->modelImagenLibro = new ImagenLibroModel();
            $this->modelComentario = new ComentarioModel();
            $this->permisos = $_SESSION["Permisos"];
        }

        function verCrear(){
            $generos = $this->modelGenero->GetGeneros();
            $this->view->MostrarCrear($generos, $this->permisos);
        }

        function verEditarLibro($param){
            $libro = $this->modelLibro->GetLibro($param[0]);
            $generos = $this->modelGenero->GetGeneros();
            $imagenesLibro = $this->modelImagenLibro->GetImagenesByLibro($param[0]);
            $this->view->MostrarEditarLibro($libro, $imagenesLibro, $generos, $this->permisos);
        }

        function verEditarGenero($param){
            $genero = $this->modelGenero->GetGenero($param[0]);
            $this->view->MostrarEditarGenero($genero, $this->permisos);
        }

        function verUsuarios(){
            $usuarios = $this->modelUsuario->GetUsuarios();
            $this->view->MostrarUsuarios($usuarios, $this->permisos);
        }

        function InsertarLibro(){
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $autor = $_POST["autor"];
            $editorial = $_POST["editorial"];
            $edad = $_POST["edad"];
            $genero = $_POST["genero"];
            $this->modelLibro->InsertarLibro($genero, $titulo, $descripcion, $autor, $editorial, $edad);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/crearCategoriaOLibro");
        }

        function InsertarCategoria(){
            $nombre = $_POST["nombre"];
            $this->modelGenero->InsertarGenero($nombre);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/crearCategoriaOLibro");
        }

        function InsertarImagenLibro($param){
            $libro = $param[0];
            $imagen = $_FILES['imagen']['tmp_name'];
            $nombreImagen = $_FILES['imagen']['name'];
            $retorno = "EditarLibro/" . $libro;
            $imagenDb = $this->modelImagenLibro->GetImagen($nombreImagen);
            if(isset($imagenDb['id_imagen'])){
                $this->view->MostrarMensaje("EL ARCHIVO YA EXISTIA", $retorno, $this->permisos);
            }
            else{
                $this->modelImagenLibro->InsertarImagen($imagen, $nombreImagen, $libro);
                header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/EditarLibro/" . $libro);
            }
        }

        function BorrarLibro($param){
            $this->modelLibro->BorrarLibro($param[0]);
            $this->modelImagenLibro->BorrarImagenByLibro($param[0]);
            $this->modelComentario->BorrarComentariosByLibro($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
        }

        function BorrarImagenLibro($param){
            $this->modelImagenLibro->BorrarImagenByNombre($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/EditarLibro/" . $param[1]);
        }

        function BorrarGenero($param){
            $mensaje = $this->modelGenero->BorrarGenero($param[0]);
            $retorno = "Generos";
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/Generos");
        }

        function BorrarUsuario($param){
            $this->modelUsuario->BorrarUsuario($param[0]);
            $this->modelComentario->BorrarComentariosByUsuario($param[0]);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/Usuarios");
        }

        function ModificarLibro($param){
            $libro = $param[0];
            $genero = $_POST["genero"];
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $autor = $_POST["autor"];
            $editorial = $_POST["editorial"];
            $edad = $_POST["edad"];
            $this->modelLibro->ModificarLibro($libro, $genero, $titulo, $descripcion, $autor, $editorial, $edad);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/Libro/" . $libro);
        }

        function ModificarGenero($param){
            $genero = $param[0];
            $nombre = $_POST["nombre"];
            $this->modelGenero->ModificarGenero($genero, $nombre);
            header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/Generos");
        }

        function ModificarPermisosUsuario($param){
            $usuario = $this->modelUsuario->GetUsuario($param[0]);
            if(isset($usuario['nombre'])){
                if($usuario['permisos'] == 1){
                    $permisos = 0;
                }
                else{
                    $permisos = 1;
                }
                $this->modelUsuario->ModificarPermisosUsuario($usuario['nombre'], $permisos);
                header("Location: http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . "/Usuarios");
            }
        }
    }
?>
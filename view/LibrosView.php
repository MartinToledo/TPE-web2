<?php
    require_once('libs/Smarty.class.php');

    class LibrosView{
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }
    
        function MostrarLibros($Libros, $Titulo, $permisos){
            $this->Smarty->assign('Titulo',$Titulo);
            $this->Smarty->assign('Libros',$Libros);
            $this->Smarty->assign('Permisos',$permisos);

            $this->Smarty->display('templates/libros.tpl');
        }

        function MostrarLibro($Libro, $imagenesLibro, $permisos){
            $this->Smarty->assign('Libro',$Libro);
            $this->Smarty->assign('ImagenesLibro',$imagenesLibro);
            $this->Smarty->assign('Permisos',$permisos);

            $this->Smarty->display('templates/libro.tpl');
        }
    }
?>
<?php
    require_once('libs/Smarty.class.php');

    class LibrosView{
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }
    
        function MostrarTodos($Libros){
            $Titulo = "Todos Los Libros";
            $this->Smarty->assign('Titulo',$Titulo);
            $this->Smarty->assign('Libros',$Libros);

            $this->Smarty->display('templates/home.tpl');
        }

        function MostrarLibro($Libro){
            $this->Smarty->assign('Libro',$Libro);

            $this->Smarty->display('templates/libro.tpl');
        }
    }
?>
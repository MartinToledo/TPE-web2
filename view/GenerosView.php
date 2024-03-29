<?php
    require_once('libs/Smarty.class.php');

    class GenerosView{
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }
    
        function MostrarGeneros($Generos, $Titulo, $Permisos){
            $this->Smarty->assign('Titulo',$Titulo);
            $this->Smarty->assign('Generos',$Generos);
            $this->Smarty->assign('Permisos',$Permisos);

            $this->Smarty->display('templates/generos.tpl');
        }

        function MostrarGenero($Libros){
            $Titulo = $Libros[0]['nombre'];
            $this->Smarty->assign('Titulo',$Titulo);
            $this->Smarty->assign('Libros',$Libros);

            $this->Smarty->display('templates/home.tpl');
        }
    }
?>
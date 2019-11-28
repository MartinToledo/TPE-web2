<?php
    require_once('libs/Smarty.class.php');

    class AdminView{
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }

        function MostrarCrear($Generos, $Permisos){
            $this->Smarty->assign('Generos',$Generos);
            $this->Smarty->assign('Permisos',$Permisos);

            $this->Smarty->display('templates/crear.tpl');
        }

        function MostrarEditarLibro($libro, $imagenesLibro, $generos, $Permisos){
            $this->Smarty->assign('libro',$libro);
            $this->Smarty->assign('generos',$generos);
            $this->Smarty->assign('ImagenesLibro',$imagenesLibro);
            $this->Smarty->assign('Permisos',$Permisos);

            $this->Smarty->display('templates/editarLibro.tpl');
        }

        function MostrarEditarGenero($genero, $Permisos){
            $this->Smarty->assign('genero',$genero);
            $this->Smarty->assign('Permisos',$Permisos);

            $this->Smarty->display('templates/editarGenero.tpl');
        }

        function MostrarUsuarios($Usuarios, $Permisos){
            $this->Smarty->assign('Usuarios',$Usuarios);
            $this->Smarty->assign('Permisos',$Permisos);

            $this->Smarty->display('templates/usuarios.tpl');
        }

        function MostrarMensaje($Mensaje, $Retorno, $Permisos){
            $this->Smarty->assign('Mensaje', $Mensaje);
            $this->Smarty->assign('Retorno', $Retorno);
            $this->Smarty->assign('Permisos', $Permisos);

            $this->Smarty->display('templates/mensajesAdmin.tpl');
        }
    }
?>
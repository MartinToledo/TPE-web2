<?php
    class UsuarioView{
        private $Smarty;

        function __construct(){
            $this->Smarty = new Smarty();
        }

        function MostrarLogin($message = ''){
            $this->Smarty->assign('Message', $message);

            $this->Smarty->display('templates/login.tpl');
        }

        function MostrarRegistro($message = ''){
            $this->Smarty->assign('Message', $message);

            $this->Smarty->display('templates/registro.tpl');
        }

        function MostrarRecuperarContrasenia($message = '', $token = ''){
            $this->Smarty->assign('Message', $message);
            $this->Smarty->assign('Token', $token);

            $this->Smarty->display('templates/recupass.tpl');
        }
    }
?>
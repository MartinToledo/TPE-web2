<?php
    define('HOME', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    define('LOGIN', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/login');
    define('LOGOUT', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/logout');
    define('INSERTARLG', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/homeAdmin');

    class ConfigApp{
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
          '' => 'LibrosController#Home',
          'home' => 'LibrosController#Home',
          'Libro' => 'LibrosController#VerLibro',
          'Generos' => 'GenerosController#VerGeneros',
          'Genero' => 'GenerosController#VerGenero',
          'borrarLibro' => 'LibrosController#BorrarTarea',
          'modificarLibro' => 'LibrosController#CompletarTarea',
          'agregarLibro' => 'LibrosController#InsertTarea',
          'Login' => 'LoginController#login',
          'verificarLogin' => 'LoginController#verificarLogin',
          'logout' => 'LoginController#logout',
          'homeAdmin' => 'AdminController#Home',
        ];
    }
?>
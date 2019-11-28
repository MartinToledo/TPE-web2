<?php
    define('HOME', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    define('LOGIN', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/Login');
    define('LOGOUT', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/logout');
    define('INSERTARLG', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]) . '/homeAdmin');

    class ConfigApp{
        public static $ACTION = 'action';
        public static $PARAMS = 'params';
        public static $ACTIONS = [
          '' => 'LibrosController#Home',
          'home' => 'LibrosController#Home',
          'Libro' => 'LibrosController#VerLibro',
          'Generos' => 'LibrosController#VerGeneros',
          'Genero' => 'LibrosController#VerLibrosPorGenero',
          'Usuarios' => 'AdminController#verUsuarios',
          'EliminarLibro' => 'AdminController#BorrarLibro',
          'EliminarGenero' => 'AdminController#BorrarGenero',
          'EliminarUsuario' => 'AdminController#BorrarUsuario',
          'EliminarImagenLibro' => 'AdminController#BorrarImagenLibro',
          'EditarLibro' => 'AdminController#verEditarLibro',
          'EditarGenero' => 'AdminController#verEditarGenero',
          'modificarLibro' => 'AdminController#ModificarLibro',
          'modificarGenero' => 'AdminController#ModificarGenero',
          'modificarContraseñaByToken' => 'UsuariosController#modificarContraseniaByToken',
          'ModificarPermisosUsuario' => 'AdminController#ModificarPermisosUsuario',
          'crearCategoriaOLibro' => 'AdminController#verCrear',
          'agregarLibro' => 'AdminController#InsertarLibro',
          'agregarGenero' => 'AdminController#InsertarCategoria',
          'agregarImagenLibro' => 'AdminController#InsertarImagenLibro',
          'Login' => 'UsuariosController#verLogin',
          'Registro' => 'UsuariosController#verRegistro',
          'olvideMiContraseña' => 'UsuariosController#verRecuperarContrasenia',
          'verificarLogin' => 'UsuariosController#verificarLogin',
          'registrarUsuario' => 'UsuariosController#CrearUsuario',
          'recuperarContraseña' => 'UsuariosController#RecuperarContrasenia',
          'Logout' => 'UsuariosController#logout',
        ];
    }
?>
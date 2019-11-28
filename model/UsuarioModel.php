<?php
    class UsuarioModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetUsuarios(){
            $sentencia = $this->db->prepare("select * from usuario");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function GetUsuario($nombre){
            $sentencia = $this->db->prepare("select * from usuario where nombre=?");
            $sentencia->execute(array($nombre));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function InsertarUsuario($nombre, $correo, $passcode){
            $sentencia = $this->db->prepare("insert into usuario(nombre, email, passcode) values(?,?,?)");
            $sentencia->execute(array($nombre, $correo, $passcode));
        }


        function BorrarUsuario($nombre){
            $usuario = $this->GetUsuario($nombre);
            if(isset($usuario['nombre'])){
                $sentencia = $this->db->prepare("delete from usuario where nombre=?");
                $sentencia->execute(array($nombre));
            }
        }

        function ModificarPermisosUsuario($nombre, $permisos){
            $sentencia = $this->db->prepare("update usuario set permisos=? where nombre=?");
            $sentencia->execute(array($permisos, $nombre));
        }

        // function GetToken($id_token){
        //     $sentencia = $this->db->prepare("select * from token where id_token=?");
        //     $sentencia->execute(array($id_token));
        //     return $sentencia->fetch(PDO::FETCH_ASSOC);
        // }

        // function InsertarToken($usuario, $token, $dia){
        //     $sentencia = $this->db->prepare("insert into token(id_usuario, id_token, dia) values(?,?,?)");
        //     $sentencia->execute(array($usuario, $token, $dia));
        // }

        function modificarContrasenia($usuario, $password){
            $sentencia = $this->db->prepare("update usuario set passcode=? where nombre=?");
            $sentencia->execute(array($password, $usuario));
        }

        // function BorrarToken($usuario){
        //     $sentencia = $this->db->prepare("delete from token where id_usuario=?");
        //     $sentencia->execute(array($usuario));
        // }
    }
?>
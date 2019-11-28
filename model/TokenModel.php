<?php
    class TokenModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetToken($id_token){
            $sentencia = $this->db->prepare("select * from token where id_token=?");
            $sentencia->execute(array($id_token));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function InsertarToken($usuario, $token, $dia){
            $sentencia = $this->db->prepare("insert into token(id_usuario, id_token, dia) values(?,?,?)");
            $sentencia->execute(array($usuario, $token, $dia));
        }

        function BorrarToken($usuario){
            $sentencia = $this->db->prepare("delete from token where id_usuario=?");
            $sentencia->execute(array($usuario));
        }
    }
?>
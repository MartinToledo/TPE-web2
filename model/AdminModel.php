<?php
    class AdminModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        // function GetAdmins(){
        //     $sentencia = $this->db->prepare("select * from administrador");
        //     $sentencia->execute();
        //     return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        // }

        function InsertarAdmin($nombre, $passcode){
            $sentencia = $this->db->prepare("INSERT INTO administrador(nombre, passcode) VALUES(?,?)");
            $sentencia->execute(array($nombre, $passcode));
        }

        function GetAdmin($user){
            $sentencia = $this->db->prepare("select * from administrador where nombre=?"); //puedo poner "limit 1" para que devuelva un solo usuario
            $sentencia->execute(array($user));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
    }
?>
<?php
    class AdminModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetAdmins(){
            $sentencia = $this->db->prepare("select * from administrador");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function InsertarAdmin($nombre, $passcode){
            $sentencia = $this->db->prepare("INSERT INTO administrador(nombre, passcode) VALUES(?,?)");
            $sentencia->execute(array($nombre, $passcode));
        }

        function GetAdmin($admin){
            $sentencia = $this->db->prepare("select * from administrador where nombre=?");
            $sentencia->execute(array($admin));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function BorrarAdmin($nombreAdmin){
            $admin = $this->GetAdmin($nombreAdmin);
            if(isset($admin)){
                $sentencia = $this->db->prepare("delete from administrador where nombre=?");
                $sentencia->execute(array($nombreAdmin));
            }
        }

        function ModificarAdmin($nombre, $password){
            $sentencia = $this->db->prepare("update libro set nombre=?, passcode=? where nombre=?");
            $sentencia->execute(array($nombre, $password));
        }
    }
?>
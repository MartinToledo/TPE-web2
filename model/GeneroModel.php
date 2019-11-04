<?php
    class GeneroModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetGeneros(){
            $sentencia = $this->db->prepare("select * from genero");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function GetGenero($id_genero){
            $sentencia = $this->db->prepare("select * from libro, genero where libro.id_genero = genero.id_genero and libro.id_genero=?");
            $sentencia->execute(array($id_genero));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function InsertarGenero($nombre){
            $sentencia = $this->db->prepare("INSERT INTO genero(nombre) VALUES(?)");
            $sentencia->execute(array($nombre));    
            //$lastId = $this->db->lastInsertId();
            //return $this->GetGenero($lastId);
        }

        function BorrarGenero($id_genero){
            $genero = $this->GetTarea($id_genero);
            if(isset($genero)){
                $sentencia = $this->db->prepare("delete from genero where id_genero=?");
                $sentencia->execute(array($id_genero));
                //return $libro;
            }
        }

        function ModificarGenero($nombre, $id_genero){
            $sentencia = $this->db->prepare("update genero set nombre=? where id_genero=?");
            $sentencia->execute(array($nombre, $id_genero));
        }
    }
?>
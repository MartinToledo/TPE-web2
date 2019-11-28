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
            $sentencia = $this->db->prepare("select * from genero where id_genero=?");
            $sentencia->execute(array($id_genero));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function InsertarGenero($nombre){
            $sentencia = $this->db->prepare("INSERT INTO genero(nombre) VALUES(?)");
            $sentencia->execute(array($nombre));
        }

        function BorrarGenero($id_genero){
            $genero = $this->GetGenero($id_genero);
            $sentencia = $this->db->prepare("select titulo from libro where id_genero=? limit 1");
            $sentencia->execute(array($id_genero));
            $libro = $sentencia->fetch(PDO::FETCH_ASSOC);;
            if(isset($genero["nombre"])){
                if(isset($libro["titulo"])){
                    return "El genero no se borro debido a que tiene libros asociados a él, asegurese de borrarlos antes de borrar dicho genero";
                }
                else{
                    $sentencia = $this->db->prepare("delete from genero where id_genero=?");
                    $sentencia->execute(array($id_genero));
                    return "El genero se borro correctamente";
                }
            }
            else{
                return "El genero que ha intentado eliminar no existe en el sistema";
            }
        }

        function ModificarGenero($id_genero, $nombre){
            $sentencia = $this->db->prepare("update genero set nombre=? where id_genero=?");
            $sentencia->execute(array($nombre, $id_genero));
        }
    }
?>
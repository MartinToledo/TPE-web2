<?php
    class LibroModel{
        private $db;

        function __construct(){
            $this->db = $this->Connect();
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetLibros(){
            $sentencia = $this->db->prepare("select * from libro, genero where libro.id_genero = genero.id_genero");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function GetLibro($id_libro){
            $sentencia = $this->db->prepare("select * from libro, genero where libro.id_genero = genero.id_genero and id_libro=?");
            $sentencia->execute(array($id_libro));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function InsertarLibro($id_genero, $titulo, $descripcion, $autor, $editorial, $edad){
            $sentencia = $this->db->prepare("INSERT INTO libro(id_genero, titulo, descripcion, autor, editorial, edad) VALUES(?,?,?,?,?,?)");
            $sentencia->execute(array($id_genero, $titulo, $descripcion, $autor, $editorial, $edad));    
            //$lastId = $this->db->lastInsertId();
            //return $this->GetLibro($lastId);
        }

        function BorrarLibro($id_libro){
            $libro = $this->GetLibro($id_libro);
            if(isset($libro)){
                $sentencia = $this->db->prepare("delete from libro where id_libro=?");
                $sentencia->execute(array($id_libro));
                //return $libro;
            }
        }

        function ModificarLibro($id_libro, $id_genero, $titulo, $descripcion, $autor, $editorial, $edad){
            $sentencia = $this->db->prepare("update libro set id_genero=?, titulo=?, descripcion=?, autor=?, editorial=?, edad=? where id_libro=?");
            $sentencia->execute(array($id_genero, $titulo, $descripcion, $autor, $editorial, $edad, $id_libro));
        }
    }
?>
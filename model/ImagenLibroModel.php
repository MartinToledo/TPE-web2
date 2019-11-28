<?php
    class ImagenLibroModel{
        private $db;
        private $carpeta;

        function __construct(){
            $this->db = $this->Connect();
            $this->carpeta = "./imagesLibros/";
            opendir($this->carpeta);
        }

        private function Connect(){
            return new PDO('mysql:host=localhost;' . 'dbname=libros;charset=utf8', 'root', '');
        }

        function GetImagen($id_imagen){
            $sentencia = $this->db->prepare("select * from imagenlibro where id_imagen=?");
            $sentencia->execute(array($id_imagen));
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }

        function GetImagenesByLibro($id_libro){
            $sentencia = $this->db->prepare("select * from imagenlibro where id_libro=?");
            $sentencia->execute(array($id_libro));
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function InsertarImagen($imagen, $nombre, $id_libro){
            $sentencia = $this->db->prepare("INSERT INTO imagenlibro(id_imagen, id_libro) VALUES(?,?)");
            $sentencia->execute(array($nombre, $id_libro));
            $destino = $this->carpeta . $nombre;
            copy($imagen, $destino);
        }

        function BorrarImagenByNombre($id_imagen){
            $imagen = $this->GetImagen($id_imagen);
            if(isset($imagen)){
                $sentencia = $this->db->prepare("delete from imagenlibro where id_imagen=?");
                $sentencia->execute(array($id_imagen));
                $this->carpeta .= $id_imagen;
                unlink($this->carpeta);
            }
        }

        function BorrarImagenByLibro($id_libro){
            $imagenes = $this->GetImagenesByLibro($id_libro);
            if(isset($imagenes[0]['id_libro'])){
                foreach($imagenes as $imagen){
                    $ruta = $this->carpeta . $imagen['id_imagen'];
                    unlink($ruta);
                }
                $sentencia = $this->db->prepare("delete from imagenlibro where id_libro=?");
                $sentencia->execute(array($id_libro));
            }
        }
    }
?>
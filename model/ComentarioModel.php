<?php
    class ComentarioModel{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=libros;charset=utf8', 'root', '');
        }

        public function getComentarios($id_libro, $orden, $atributo){
            $sentencia = $this->db->prepare( "select * from comentario where id_libro=? ORDER BY $atributo $orden");
            $sentencia->execute(array($id_libro));//PREGUNTAR POR QUE NO ME DEJA USAR LAS VARIABLES ACA Y PONER LOS ? EN LA SENTENCIA
            $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $comentarios;
        }

        public function GetComentario($id_comentario){
            $sentencia = $this->db->prepare("select * from comentario where id_comentario=?");
            $sentencia->execute(array($id_comentario));
            $comentario = $sentencia->fetch(PDO::FETCH_OBJ);

            return $comentario;
        }

        public function InsertarComentario($id_usuario, $id_libro, $fecha, $puntuacion, $contenido){
            $sentencia = $this->db->prepare("INSERT INTO comentario(id_usuario, id_libro, fecha, puntaje, contenido) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($id_usuario, $id_libro, $fecha, $puntuacion, $contenido));

            return $this->db->lastInsertId();
        }

        public function BorrarComentario($id_comentario){
            $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
            $sentencia->execute(array($id_comentario));
        }

        public function BorrarComentariosByLibro($id_libro){
            $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_libro=?");
            $sentencia->execute(array($id_libro));
        }

        public function BorrarComentariosByUsuario($id_usuario){
            $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_usuario=?");
            $sentencia->execute(array($id_usuario));
        }
    }
?>
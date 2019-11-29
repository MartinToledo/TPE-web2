<?php
    require_once("./model/ComentarioModel.php");
    require_once("ApiController.php");
    require_once("JSONView.php");

    class ComentariosApiController extends ApiController{

        public function getComentarios($params = null) {
                $libro = $params[':ID'];
                $orden = $_GET['orden'];
                $atributo = $_GET['atributo'];
                if((($orden == "ASC") || ($orden == "DESC")) && (($atributo == "fecha") || ($atributo == "puntaje"))){
                    $comentarios = $this->model->getComentarios($libro, $orden, $atributo);
                    $this->view->response($comentarios, 200);
                }
        }

        public function deleteComentario($params = []){
            if($this->checkSessionAdminStarted()){
                $comentario_id = $params[':ID'];
                $comentario = $this->model->GetComentario($comentario_id);
                if($comentario){
                    $this->model->BorrarComentario($comentario_id);
                    $this->view->response("Comentario id=$comentario_id eliminado con éxito", 200);
                }
                else{ 
                    $this->view->response("Comentario id=$comentario_id not found", 404);
                }
            }
            else{
                $this->view->response("Sin permisos necesarios para realizar esta acción", 403);
            }
        }

        public function addComentario($params = []){
            if(($this->definirPermisos() == 0) || ($this->definirPermisos() == 1)){
                $comentario = $this->getData();
                $fecha_actual = date("Y-m-d H:i:s");
                session_start();
                $usuario = $_SESSION["User"];
                $comentarioId = $this->model->InsertarComentario($usuario, $comentario->id_libro, $fecha_actual, $comentario->puntaje, $comentario->contenido);
                $comentarioNuevo = $this->model->GetComentario($comentarioId);
                if($comentarioNuevo){
                    $this->view->response($comentarioNuevo, 200);
                }
                else{
                    $this->view->response("Error al insertar comentario", 500);
                }
            }
            else{
                $this->view->response("Sin permisos necesarios para realizar esta acción", 403);
            }
        }
    }
?>
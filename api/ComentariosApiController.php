<?php
require_once("./model/ComentarioModel.php");
require_once("ApiController.php");
require_once("JSONView.php");

class ComentariosApiController extends ApiController{

    public function getComentarios($params = null) {
        $libro = $params[':ID'];
        $orden = $_GET['orden'];
        $atributo = $_GET['atributo'];
        $comentarios = $this->model->getComentarios($libro, $orden, $atributo);
        $this->view->response($comentarios, 200);
    }

    // TareasApiController.php
    public function deleteComentario($params = []) {
        $comentario_id = $params[':ID'];
        $comentario = $this->model->GetComentario($comentario_id);

        if($comentario){
            $this->model->BorrarComentario($comentario_id);
            $this->view->response("Comentario id=$comentario_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("Comentario id=$comentario_id not found", 404);
    }

    // TareaApiController.php
    public function addComentario($params = []) {     
        $comentario = $this->getData(); // la obtengo del body
        $fecha_actual = date("Y-m-d H:i:s");
        session_start();
        $usuario = $_SESSION["User"];
        // inserta la tarea
        $comentarioId = $this->model->InsertarComentario($usuario, $comentario->id_libro, $fecha_actual, $comentario->puntaje, $comentario->contenido);
        // obtengo la recien creada
        $comentarioNuevo = $this->model->GetComentario($comentarioId);

        if($comentarioNuevo){
            $this->view->response($comentarioNuevo, 200);
        }
        else{
            $this->view->response("Error al insertar comentario", 500);
        }
    }
}
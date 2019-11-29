<?php
    require_once "./controller/SecuredController.php";

    abstract class ApiController extends SecuredController{
        protected $model;
        protected $view;
        private $data;

        public function __construct(){
            $this->view = new JSONView();
            $this->data = file_get_contents("php://input"); 
            $this->model = new ComentarioModel();
        }

        function getData(){ 
            return json_decode($this->data);
        }
    }
?>
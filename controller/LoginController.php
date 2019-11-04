<?php
    require_once "./view/LoginView.php";
    require_once "./model/AdminModel.php";

    class LoginController{
        private $view;
        private $model;

        function __construct(){
            $this->view = new LoginView();
            $this->model = new AdminModel();
            $this->Titulo = "Login";
        }

        function login(){
            $this->view->mostrarLogin();
        }

        function logout(){
            session_start();
            session_destroy();
            header(LOGIN);
        }

        function verificarLogin(){
            $user = $_POST["usuarioId"];
            $pass = $_POST["passwordId"];
            $dbUser = $this->model->GetAdmin($user);
            if(isset($dbUser)){
                if(password_verify($pass, $dbUser["passcode"])){
                    session_start();
                    $_SESSION["User"] = $user;
                    header(INSERTARLG);
                }
                else{
                    $this->view->mostrarLogin("Constraseña incorrecta");                    
                }
            }
            else{
                $this->view->mostrarLogin("No existe el usuario");
            }
        }
    }
?>

<!-- $hash = password_hash("user2pass", PASSWORD_DEFAULT);

    echo $hash;

    if(password_verify("micontraseñaa", $hash)){
        echo "Credenciales validas";
    }
    else{
        echo "Credenciales invalidas";
} -->
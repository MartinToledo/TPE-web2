<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once './PHPMailer/Exception.php';
    require_once './PHPMailer/PHPMailer.php';
    require_once './PHPMailer/SMTP.php';
    require_once  './view/UsuarioView.php';
    require_once  './model/UsuarioModel.php';
    require_once  './model/TokenModel.php';

    class UsuariosController{
        private $view;
        private $modelUsuario;
        private $modelToken;

        function __construct(){
            $this->view = new UsuarioView();
            $this->modelUsuario = new UsuarioModel();
            $this->modelToken = new TokenModel();
        }

        function verLogin(){
            $this->view->MostrarLogin();
        }

        function verRegistro(){
            $this->view->MostrarRegistro();
        }

        function verRecuperarContrasenia(){
            $this->view->MostrarRecuperarContrasenia();
        }

        function logout(){
            session_start();
            session_destroy();
            header(HOME);
        }

        function verificarLogin(){
            $user = $_POST["usuarioId"];
            $pass = $_POST["passwordId"];
            $dbUser = $this->modelUsuario->GetUsuario($user);
            if(isset($dbUser["nombre"])){
                if(password_verify($pass, $dbUser["passcode"])){
                    $permisos = $dbUser["permisos"];
                    session_start();
                    $_SESSION["User"] = $user;
                    $_SESSION["Permisos"] = $permisos;
                    header(HOME);
                }
                else{
                    $this->view->MostrarLogin("Constraseña incorrecta");
                }
            }
            else{
                $this->view->MostrarLogin("El usuario ingresado no existe");
            }
        }

        function CrearUsuario(){
            if((!empty($_POST['usuarioId'])) && (!empty($_POST['correoElec'])) && (!empty($_POST['passwordId']))){
                $nombre = $_POST['usuarioId'];
                $correo = $_POST['correoElec'];
                $passcode = $_POST['passwordId'];
                $usuario = $this->modelUsuario->GetUsuario($nombre);
                if(isset($usuario['nombre'])){
                    $this->view->MostrarRegistro('Usuario ya existente, ingrese un nombre distinto');
                }
                else{
                    $hash = password_hash($passcode, PASSWORD_DEFAULT);
                    $this->modelUsuario->InsertarUsuario($nombre, $correo, $hash);
                    $this->verificarLogin();
                }
            }
            else{
                $this->view->MostrarRegistro('Llene todos los campos antes de enviar el formulario');
            }
        }

        function RecuperarContrasenia(){
            if(isset($_GET['token'])){
                $token = $this->modelToken->GetToken($_GET['token']);
                $fecha = localtime(time(),true);
                if((isset($token['id_usuario'])) && ($token['dia'] == $fecha["tm_mday"])){
                    $this->view->MostrarRecuperarContrasenia("Escribe tu nueva contraseña", $token['id_token']);
                }
            }
            else{
                $usuario = $_POST['usuarioId'];
                $usuario = $this->modelUsuario->GetUsuario($usuario);
                if(isset($usuario['nombre'])){
                    $token = bin2hex(random_bytes(30));
                    $fecha = localtime(time(),true);
                    $this->modelToken->InsertarToken($usuario['nombre'], $token, $fecha["tm_mday"]);

                    $mail = new PHPMailer(true);

                    try{
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'literary.venta.de.libros@gmail.com';
                        $mail->Password = 'Literary7!';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Port = 587;

                        $mail->setFrom('literary.venta.de.libros@gmail.com', 'Literary');
                        $mail->addAddress($usuario['email']);

                        $mail->isHTML(true);
                        $mail->Subject = 'RECUPERAR PASSWORD DE LITERARY';
                        $mail->Body = 'HOLA, <a href="https://127.0.0.1/TPEWEB2/recuperarContraseña?token='.$token.'">HAS CLICK AQUÍ PARA DEFINIR TU NUEVA CONTRASEÑA</a>, TEN EN CUENTA QUE SOLO FUNCIONARA EL DIA QUE TE ENVIAMOS ESTE MAIL O HASTA QUE LO UTILICES';

                        $mail->send();
                        $this->view->MostrarRecuperarContrasenia('Checkea Tu Mail, te hemos enviado un mensaje para que puedas recuperar tu contraseña, si no lo encuentras revisa tu casilla de spam o vuelve a intentarlo');
                    }
                    catch(Exception $e) {
                        $this->view->MostrarRecuperarContrasenia("Hubo Un Error Al Enviar El Mensaje {$mail->ErrorInfo}");
                    }
                }
                else{
                    $this->view->MostrarRecuperarContrasenia("EL usuario al que tratas de recuperar su contraseña no existe");
                }
            }
        }

        function modificarContraseniaByToken(){
            $token = $this->modelToken->GetToken($_POST['id_token']);
            $usuario = $token['id_usuario'];
            $passcode = $_POST['newPassCode'];
            $hash = password_hash($passcode, PASSWORD_DEFAULT);
            $this->modelUsuario->modificarContrasenia($usuario, $hash);
            $this->modelToken->BorrarToken($usuario);
            $this->view->MostrarLogin("Ya hemos cambiado tu contraseña, prueba ingresando ahora!");
        }
    }
?>
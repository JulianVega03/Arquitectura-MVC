<?php
class LoginController extends Controller
{

    private $persona;

    public function __construct()
    {
       $this->persona = $this->model('Persona')
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Login App"];
        $this->view('login/index', $datos);
    }

    public function actionLoggear()
    {

        if (isset($_POST['enviar'])) {
            $codigo =  $_POST['codigo'];
            $docum = $_POST['documento'];
            $clave = $_POST['clave'];

            if($this->persona->existeUsuario($codigo, $clave)){

                header("location: " .URL ."home" );

            }else{

            }

        }

    }
}

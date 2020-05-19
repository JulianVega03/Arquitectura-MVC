<?php
class IndexController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Bienvenidos"];
        $this->view('index/index',$datos);
    }

    public function actionLogin()
    {
        $datos = ["titulo" => "Login App"];
        $this->view('login/login',$datos);
    }

    
}

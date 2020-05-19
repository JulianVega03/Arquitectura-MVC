<?php
class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Welcome to The Home"];
        $this->view('home/index',$datos);
    }


    
}

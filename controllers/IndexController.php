<?php
class IndexController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $this->view('index');
    }

    
}

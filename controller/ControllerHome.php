<?php
class ControllerHome
{
    public function index($page)
    {
        include('views/' . $page . '.php');
    }
    // function login(){
    //     require("loginController.php");
    //     require("views/login.php");
    //     $login = new loginController;
    //     $login->loginController();
    // }
}


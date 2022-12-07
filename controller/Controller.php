<?php
class Controller
{
    public function index($page)
    {
        include('views/' . $page . '.php');
    }
}

<?php
require_once './autoload.php';
$home = new Controller();
$pages=['home','about','gallery','contact'];
if (isset($_GET['page'])){
    if (in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);
    } else {
        include('views/includes/404.php');
    }
} else {
    $home->index('home');
}

?>
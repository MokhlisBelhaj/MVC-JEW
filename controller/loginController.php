<?php

if(isset($_POST['login'])) {
    $login = new LoginController;
    $login -> login();
}

class LoginController {
  public function login() {
      if(isset($_POST['email']) && isset($_POST['password'])) {
          $data = array (
            'email' => $_POST['email'],
            'password' => $_POST['password'],
          );
      }
    $loginModel = new LoginModel();
    $result = $loginModel->check($data);
    if ($result == true) {
      header('Location: gestion');
    } else {
      $errorMessage = "Invalid email or password";
      include 'login_view.php';
    }
    }
  }


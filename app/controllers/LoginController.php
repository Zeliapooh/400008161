<?php


session_start();


spl_autoload_register(function ($className) {
  $file = str_replace('/', '\\', $className) . '.php';
  $path = '..\controllers' . '\\' . $file;
  $path2 = '..\models' . '\\' . $file;
  $path3 = '..\views' . '\\' . $file;
  if (file_exists($path)) {
    require_once $path;
  } elseif (file_exists($path2)) {
    require_once $path2;
  } elseif (file_exists($path3)) {
    require_once $path3;
  }

});

class LoginController
{
  private $model;

  private $email;
  private $password;

  private $status;
  public function __construct()
  {
    $this->model = new LoginModel();
    if (isset($_POST["password"])) {
      $this->password = $_POST["password"];
      $this->email = $_POST['email'];
    }
    $this->status = false;
  }

  function validate()
  {

    $pass = $this->model->check_user_credentials($this->email);
    if ($pass) {
      $auth = password_verify($this->password, $pass['pass']);

      if ($auth == true) {
        $this->login();
      } else {
        $error = "Invalid email/password";
        require '..\views\LoginView.php';
      }
    } else {
      $error = "Invalid email/password";
      require '..\views\LoginView.php';
    }

  }
  function login()
  {
    $userRole = $this->model->check_permissions($_POST['email']);
    $username = $this->model->getUsername($_POST['email']);
    $_SESSION["username"] = $username['username'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["role"] = $userRole['AccessLevel'];


    if ($userRole['AccessLevel'] == 'Research Group Manager') {
      $rgmController = new ResearchGroupManagerController();
      $rgmController->index();
    } elseif ($userRole['AccessLevel'] == 'Research Study Manager') {
      $rsmController = new ResearchStudyManagerController();
      $rsmController->index();
    } elseif ($userRole['AccessLevel'] == 'Researcher') {
      $rController = new ResearcherController();
      $rController->index();
    }

  }

}

$LoginController = new LoginController();
$LoginController->validate();
?>
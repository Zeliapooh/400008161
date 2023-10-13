<?php
//spl_autoload_register() ;
session_start();
spl_autoload_register(function ($className) {
  $file = str_replace('/', '\\', $className) . '.php';
  $path = '..\controllers'. '\\' . $file;
  $path2 = '..\models'. '\\' . $file;
  $path3 ='..\views'. '\\' . $file;
  if (file_exists($path)) {
    require_once $path;
  }elseif (file_exists($path2)) {
    require_once $path2;
  }elseif (file_exists($path3)) {
    require_once $path3;
  }

});


class CreateUserController
{
  private $model;
  private $username;
  private $email;
  private $password;
  private $status = false;

  private $roles;
  private $errorState;

  private $assignedRole;


  public function __construct()
  {
    $this->model = new CreateUserModel();
    if (isset($_POST["username"])) {
      $this->username = $_POST["username"];
      $this->password = $_POST["password"];
      $this->email = $_POST['email'];
      $this->roles = $_POST['rolesFound'];

    }
  }
  function index()
  {


    // $select_str = "";
    // $rolesReturned = $this->returnRoles();
    // for ($i = 0; $i < count($rolesReturned); $i++) {
    //   $h = $rolesReturned[$i]['role'];
    //   $select_str .= "<OPTION VALUE=\"$h\" >$h\n";
    //   # code...
    // }
    if (!isset($_POST["username"])) {
      require '..\views\CreateUser.php';
    } else {
      $this->validate();
    }

  }

  function validate()
  {

    $checkUser = $this->model->check_user_exists($this->username);
    $checkEmail = $this->model->check_email_exists($this->email);
    $hasUppercase = preg_match('@[A-Z]@', $this->password);
    $hasLowercase = preg_match('@[a-z]@', $this->password);
    $hasDigit = preg_match('@[0-9]@', $this->password);

    //===============================Check username==============================\\
    if ($checkUser['amt'] > 0) {
      $usernameErr = "* This username is already taken";
    }
    else {
      $usernameErr = "";
    }

    //===============================Check email==============================\\
    if ($checkEmail['amt'] > 0) {
      $emailErr = "* This email is already taken";
    }
    elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Valid email is required";
    } else {
      $emailErr = "";
    }

    //===============================Check password==============================\\
    if (!$hasUppercase || !$hasLowercase || !$hasDigit || strlen($this->password) < 10) {
      $passwordErr = '* Passwords must contain at least one upper case character, at least one digit and be at least 10 characters long.';
    } else {
      $passwordErr = "";
    }

    if ( empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
      $this->signup();
    } else {
      $addedMsg = "";
      require '..\views\CreateUser.php';     
    }

  }

  function returnRoles()
  {
    $rolesFound = $this->model->getRoles();
    return $rolesFound;

  }
  function signup()
  {

    $hashPassword = password_hash($this->password, PASSWORD_DEFAULT);


    $this->model->insert_user($this->username, $hashPassword, $this->email, $this->roles);
    $addedMsg = "User has been created";

    require '..\views\CreateUser.php';

  }




}

$CreateUserController = new CreateUserController();
$CreateUserController->index();
?>
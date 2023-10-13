<?php
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
class Index {
    private $model;
    private $username;
    private $email;
    public function __construct() {
        $this->model = new IndexModel();
    }

    public function index() {
       // require '..\views\RegistrationView.php';
    }

    // You can add more methods for handling tasks, such as adding, editing, or deleting.
}
?>

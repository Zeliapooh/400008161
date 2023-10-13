<?php
class RegistrationModel {
    //private $tasks = [];
    private $conn = null;
    private $db = null;
    private $name = "hello";
    // Create connection
    
    public function __construct() {
        $this->db=new PDO('mysql:host=localhost;dbname=user_management_system', 'root', '');
        // Initialize with some dummy tasks
        //$conn = mysqli_connect("localhost","root","","400008161");
        //$this->conn = mysqli_connect("localhost", "root","", "user_management_system");
        
    }

    public function check_user_exists($username)
    {
        $stmt = $this->db->query("SELECT COUNT(*) as `amt` FROM `users` WHERE username = '$username'");
        $stmt->execute();
        $count = $stmt->fetch(PDO::FETCH_ASSOC);
        return $count;
    }
    public function check_email_exists($email)
    {
        $stmt = $this->db->query("SELECT COUNT(*) as `amt` FROM `users` WHERE email = '$email'");
        $stmt->execute();
        $count = $stmt->fetch(PDO::FETCH_ASSOC);
        return $count;
    }
    public function insert_user($username, $password, $email)
    {
        //global $db;
        $stmt = $this->db->prepare("INSERT INTO users (username, password,email, role) values (?,?,?,?)");
        $stmt->execute([$username,$password,$email, 'Research Group Manager']);
        $stmt = $this->db->prepare("INSERT INTO user_access_levels (email, AccessLevel) values (?,?)");
        $stmt->execute([$email, 'Research Group Manager']);

        //$this->db->insert('register', $data);
        //$sql =  "INSERT INTO users (username, password,email) values ('$username','$password','$email') ";;
    }

  }
?>

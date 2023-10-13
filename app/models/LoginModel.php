<?php
class LoginModel {
    //private $tasks = [];
    private $conn = null;
    private $db = null;
    private $name = "hello";
    // Create connection
    
    public function __construct() {
        $this->db=new PDO('mysql:host=localhost;dbname=user_management_system', 'root', '');

        
    }

    public function check_user_credentials($email)
    {

        $stmt = $this->db->query("SELECT password as `pass` FROM `users` WHERE email = '$email' " );
        //$stmt->execute();
        $pass = $stmt->fetch(PDO::FETCH_ASSOC);
        return $pass;
    }

    public function check_permissions($email)
    {

        $stmt = $this->db->query("SELECT AccessLevel FROM `user_access_levels` WHERE email = '$email' " );
        //$stmt->execute();
        $role = $stmt->fetch(PDO::FETCH_ASSOC);
        return $role;
    }

    public function getUsername($email)
    {

        $stmt = $this->db->query("SELECT username FROM `users` WHERE email = '$email' " );
        //$stmt->execute();
        $name = $stmt->fetch(PDO::FETCH_ASSOC);
        return $name;
    }


  }
?>

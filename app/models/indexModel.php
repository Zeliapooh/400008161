<?php
class IndexModel {
    //private $tasks = [];
    private $db = null;
    // Create connection
    
    public function __construct() {
        $this->db=new PDO('mysql:host=localhost;dbname=user_management_system', 'root', '');
    }


  }
?>

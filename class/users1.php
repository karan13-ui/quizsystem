<?php
session_start();

class users1{
    public $host="localhost";
    public $user_name="root";  
    public $pass="";  
    public $db_name="quiz";  
    public $conn;
    public $data;
    public $cat;
    public $ques;
    public $ans;
    public $qust;
    public $id;
    public $a;
    public function __construct() {
        $this->conn=new mysqli($this->host,$this->user_name,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die("database connection failed".$this->conn->connect_errno);
        }
       
    }
    public function signup($data)
    {
        $this->conn->query($data);
        return true;
    }
    public function signin($email,$pass)
    {
       $query=$this->conn->query("select email,password from admin where email='$email' and password='$pass'");
       $query->fetch_array(MYSQLI_ASSOC);
       if($query->num_rows>0)
       {
           $_SESSION['email']=$email;
           return true;
       }
       else
       {
           return false;
       }
    }
    public function url($url)
    {
        header("location:".$url);
    }
  }
?>
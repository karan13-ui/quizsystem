<?php

session_start();

class users{
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
       $query=$this->conn->query("select email,password from signup where email='$email' and password='$pass'");
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
    public function users_profile($email)
    {
        $query=$this->conn->query("select * from signup where email='$email'");
        $row=$query->fetch_array(MYSQLI_ASSOC);
       if($query->num_rows>0)
       {
           $this->data[]=$row;
       }
       return $this->data;
    }
     public function cat_shows()
    {
        $query=$this->conn->query("select * from category");
       while( $row=$query->fetch_array(MYSQLI_ASSOC))
       {
		  
           $this->cat[]=$row;
       }
       return $this->cat;
    }
    public function ques_show($ques)
    {
        $query=$this->conn->query("select * from questions where cat_id='$ques'");
       while( $row=$query->fetch_array(MYSQLI_ASSOC))
       {
           $this->ques[]=$row;
       }
       return $this->ques;
    }
    public function answer($data)
    {
        $right=0;
        $wrong=0;
        $noattempt=0;
        $ans= implode("",$data);
       $query=$this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
       for($i=0;$i<=count($data) and $ques=$query->fetch_array(MYSQLI_ASSOC);$i++)
       {
               if($ques['ans']== array_values($data)[$i])
               {
                   $right++;
               }
               else if(array_values($data)[$i]==4)
               {
                   $noattempt++;
               }
               else
               {
                    $wrong++;
               }   
       }
       $array=array();
       $array['right']=$right;
       $array['wrong']=$wrong;
       $array['noattempt']=$noattempt;
       return $array;
    }
    public function add_quiz($rec)
    {
        $a=$this->conn->query($rec);
        return true;
    }
    public function url($url)
    {
        header("location:".$url);
    }
}

?>

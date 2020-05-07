<?php
include "../class/users1.php";
$register=new users1;
extract($_POST);
$query="insert into admin values ('','$fname','$lname','$mail','$pass')";
if($register->signup($query))
{
    $register->url("signadmin.php?run=success");
}
?>


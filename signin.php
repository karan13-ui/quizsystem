<?php

include("class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($mail,$pass))
{
    $signin->url("home.php");
}
else
{
    $signin->url("index.php?run=failed");
}

?>
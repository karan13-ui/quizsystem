<?php

include "../class/users1.php";
$signin=new users1;
extract($_POST);
if($signin->signin($mail,$pass))
{
    $signin->url("index.php");
}
else
{
    $signin->url("signadmin.php?run=failed");
}

?>
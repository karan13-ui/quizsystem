<?php
extract($_POST);
include "../class/users.php";
$quiz=new users;
$qus= htmlentities($ques);
$option1= htmlentities($opt1);
$option2= htmlentities($opt2);
$option3= htmlentities($opt3);
$option4= htmlentities($opt4);
$array=[$option1,$option2,$option3,$option4];
$answer= array_search($ans, $array);
$query="insert into questions values ('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
if($quiz->add_quiz($query))
{
    $quiz->url("index.php?msg=run");
}
?>
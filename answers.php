<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .body1{
          background-size: cover;
          background-repeat: no-repeat; 
      }
  </style>
</head>
<body background="images/img4.jpg" class="body1" >
<?php
$total=$answer['right']+$answer['wrong']+$answer['noattempt'];
$attempted=$answer['right']+$answer['wrong'];
?>
<div class="container">
    <center><h2><u>RESULT</u></h2></center>
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total no. of questions</th>
        <th><?php echo $total ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted Questions</td>
        <td><?php echo $attempted ?></td>
      </tr>
      <tr>
        <td>Right Answer</td>
        <td><?php echo $answer['right']?></td>
      </tr>
      <tr>
        <td>Wrong Answer</td>
        <td><?php echo $answer['wrong']?></td>
      </tr>
      <tr>
        <td>Not Attempted</td>
        <td><?php echo $answer['noattempt']?></td>
      </tr>
      <tr>
        <td>Your Result</td>
        <td><?php $per=($answer['right']*100)/($total);
                echo $per." %";
                ?></td>
      </tr>
    </tbody>
  </table>
        <CENTER><h3><B>...THANKS FOR GIVING THIS TEST....</B></h3></CENTER>
 <div class="col-sm-2"></div>
</div>
</div>
</body>
</html>

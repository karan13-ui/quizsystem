<?php
include("class/users.php");
 $ques=new users();
 $cat=$_POST['cat'];
//$ques->ques_show($cat);
$_SESSION['cat']=$cat;
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      function timeout()
      {
          //var hours;
          var minute=Math.floor(timeleft/60);
          var second=timeleft%60;
          var min=checktime(minute);
          var sec=checktime(second);
          if(timeleft<=0)
          {
              clearTimeOut(tm); 
              document.getElementById("form1").submit();
          }
          else
          {
              
              document.getElementById("time").innerHTML=min+" : "+sec;
          }
          timeleft--;
          var tm=setTimeout(function(){timeout()},1000);
      }
      function checktime(msg)
      {
          if(msg<10)
          {
              msg="0"+msg;
          }
          return msg;
      }
  </script>
  <style>
      .body1{
          background-size: cover;
          background-repeat: no-repeat; 
      }
  </style>
</head>
<body background="images/img2.png" class="body1" onload="timeout()"  >
<div class="container" >
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2><u>Online Quiz</u></h2> 
        <script type="text/javascript">
                var timeleft=20*60;
            </script>
            <div id="time" style="float:right">TIME: </div></h2> 
        <form method="POST" action="answers.php" >
  <br><br>
  <?php
  $i=1;
  foreach($ques->ques_show($cat) as $question){?>
  <table class="table table-bordered">
    <thead>
        <tr class="danger">
          <th><?php echo $i ;?>&nbsp;&nbsp;<?php echo $question['question'] ?></th>
      </tr>
    </thead>
    <tbody>
        <?php if(isset($question['opt1'])) {?>
      <tr class="info">
          <td><input type="radio" value="0" name="<?php echo $question['id'] ?>"/> 1 <?php echo $question['opt1']?></td>
      </tr>
        <?php }?>
		
       <?php if(isset($question['opt2'])) {?>
     <tr class="info">
        <td><input type="radio" value="1"  name="<?php echo $question['id'] ?>"/> 2 <?php echo $question['opt2']?></td>
      </tr>
       <?php }?>
	   
	   
	    <?php if(isset($question['opt3'])) {?>
     <tr class="info">
        <td><input type="radio" value="2"  name="<?php echo $question['id'] ?>"/> 3 <?php echo $question['opt3']?></td>
      </tr>
       <?php }?>
	   
	   
	   

	   
	   
      <?php if(isset($question['opt4'])) {?>
      <tr class="info">
        <td><input type="radio" value="3"  name="<?php echo $question['id'] ?>"/> 4 <?php echo $question['opt4']?></td>
      </tr>
       <?php }?>
	   
	   <tr class="info">
          <td><input type="radio" checked="checked" style="display:none" value="4"  name="<?php echo $question['id'] ?>"/> </td>
      </tr>
    </tbody>
	   
  </table>
  <?php $i++; } ?>
  <center><input type="submit" value="Submit Quiz" class="btn btn-success"/></center>
    </form>
  <div class="col-sm-2"></div>
    </div>
</div>
</body>
</html>

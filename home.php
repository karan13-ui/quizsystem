<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ONLINE QUIZ SYSTEM</title>
  <meta charset="utf-8">
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
<body background="images/img3.jpg" class="body1">

<div class="container">
  <h2>ONLINE QUIZ SYSTEM</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
   <form action="index.php">
       <button type="submit" style="float:right" class="btn btn-primary">Logout</button>
        </form>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>QUIZ</h3>
      <br>
      <br>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz</button></center>
      <br>
      <br>
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <div id="select" class="tab-pane fade">
          <form action="ques_show.php" method="POST">
              <select class="form-control" id="" name="cat">
          <option>----Select category----</option>
           <?php
           $profile->cat_shows();
           foreach($profile->cat as $category)
           {
          ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name'];?></option>
           <?php } ?>
      </select><br>
      <center><input type="submit" value="submit" class="btn btn-primary"/></center>
              </form>
      </div>
    </div>
      <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($profile->data as $prof)
        {?>
          <tr>
          <td><?php echo $prof['id']?></td>
          <td><?php echo $prof['fname']?></td>
          <td><?php echo $prof['lname']?></td>
          <td><?php echo $prof['email']?></td>
         </tr>
        <?php }
        ?>
      
      
    </tbody>
  </table>
    </div>
  </div>
</div>
</body>
</html>

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
<body background="../images/img1.jpg" class="body1"> 
    <br>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
     <div class="panel panel-danger">
      <div class="panel-heading">ADMIN LOGIN AND REGISTRATION</div>
      <div class="panel-body">Quiz</div>
    </div>
  </div>
    </div>
</div>

<div class="container">
<div class="row">
    <div class="col-sm-6">
     <div class="panel panel-danger">
      <div class="panel-heading">Login Form</div>
       <div class="panel-body">
           <?php  
             if(isset($_GET['run']) && $_GET['run']=="failed")
                 {echo "<mark>your email and password does not match...</mark>";
                 }
                 ?> 
           <form role="form" method="POST" action="signin.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="mail" id="email" placeholder="Enter email">
        </div>
       <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
        </div>
           <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
         <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </div>
  </div>
    </div>
        <div class="col-sm-6">
         <div class="panel panel-info">
             <div class="panel-heading">Signup Form</div>
             <div class="panel-body">
             <?php  
             if(isset($_GET['run']) && $_GET['run']=="success")
                 {echo "<mark>your registeration is successful...</mark>";
                 }
                 ?>    
                 <form role="form" method="POST" action="signup.php">
      <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" name="fname" id="firstname" placeholder="Enter first name">
    </div>
      <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" name="lname" id="lastname" placeholder="Enter last name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="mail" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password">
    </div>
      <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
             </div>              
  </div>
    </div>
</div>
</div>   
</body>
</html>


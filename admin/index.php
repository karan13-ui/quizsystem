<?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >Online Quiz System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a >Dashboard</a></li>
            <li><a >Settings</a></li>
            <li><a >Profile</a></li>
            <li><a >Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a >Overview <span class="sr-only">(current)</span></a></li> 
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Add Questions</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form action="signadmin.php">
       <button type="submit" style="float:right" class="btn btn-primary">Logout</button>
        </form>
          <h1 class="page-header">Dashboard</h1>
          
          <div class="table-responsive">
              
            <h2>INSERT QUESTIONS</h2>
            <br>
            <?php
            if(isset($_GET['msg'])&& !empty($_GET['msg']))
            {
                echo "<p>data inserted successfully</p>";
            }
            ?>
            <form method="POST" action="add_quiz.php">
    <div class="form-group">
      <label for="text">Question:</label>
      <input type="text" class="form-control" name="ques" placeholder="Enter Question">
    </div>
    <div class="form-group">
      <label for="text">Option 1:</label>
      <input type="text" class="form-control" name="opt1" placeholder="Enter Option1">
    </div>
     <div class="form-group">
      <label for="text">Option 2:</label>
      <input type="text" class="form-control" name="opt2" placeholder="Enter Option2">
    </div>
     <div class="form-group">
      <label for="text">Option 3:</label>
      <input type="text" class="form-control" name="opt3" placeholder="Enter Option3">
    </div>
     <div class="form-group">
      <label for="text">Option 4:</label>
      <input type="text" class="form-control" name="opt4" placeholder="Enter Option4">
    </div>      
    <div class="form-group">
      <label for="text">Answer:</label>
      <input type="text" class="form-control"  name="ans" placeholder="Enter Answer">
    </div> 
    <div class="form-group">
      <select class="form-control" name="cat">
          <option value="">---choose category---</option>
          <?php
          foreach($category as $c)
          {
             echo "<option value=".$c['id'].">".$c['cat_name']."</option>";   
          }
          ?>
      </select>
    </div>        
    <button type="submit" class="btn btn-default">ADD</button>
  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

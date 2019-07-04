<?php
/*
  include("config.php");
  session_start();

  if($_SERVER["RESQUEST_METHOD" == "POST"]) {
    //username and password sent from Form
    $myusername = mysql_real_escape_string($db, $_POST["username"]);
    $mypassword = mysql_real_escape_string($db, $_POST["password"]);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
	  if($count == 1) {
       session_register("myusername");
       $_SESSION['login_user'] = $myusername;

       header("location: welcome.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
  }*/








?>

<html>
 <head>
  <title>Hello World</title>
 </head>

 <body>
	<form class="form-horizontal" action="page2.php" method="post">
	<fieldset>
    <div class="col-md-4" id="msg">
      
    </div>

  <div class="form-group">
  	<label class="col-md-4 control-label" for="username">Username</label>
  	<div class="col-md-4">
  	   <input id="username" name="username" placeholder="Username" class="form-control input-md" required="" type="text">
	  </div>
	</div>
	<div class="form-group">
		<label class="col-md-4 control-label" for="password">Password</label>
		<div class="col-md-4">
		    <input id="password" name="password" placeholder="Password" class="form-control input-md" required="" type="password">
		</div>
	</div>
	<!-- Button -->
	<div class="form-group">
  	<div class="col-md-4">
  	   <button id="signin" name="signin" class="btn btn-primary">Sign In</button>
  	</div>
	</div>
	</fieldset>




  </body>
</html>

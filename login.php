<html>
 <head>
  <title>Hello World</title>
 </head>

 <body>
	<form class="form-horizontal" action="welcome.php" method="post">
	<fieldset>
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

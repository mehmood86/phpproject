<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
	
		<form class="form-horizontal">
		<fieldset>
	   
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Username</label>  
			<div class="col-md-4">
			<input id="username" name="username" placeholder="Username" class="form-control input-md" required="" type="text">			
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Password</label>  
			<div class="col-md-4">
			<input id="password" name="password" placeholder="Password" class="form-control input-md" required="" type="text">			
			</div>
		</div>
		<!-- Button -->
		<div class="form-group">
		<div class="col-md-4">
		<button id="signin" name="signin" class="btn btn-primary">Sign In</button>
		</div>
		</div>
		</fieldset>
   
      <?php
		define("MINSIZE", 50);
		$var1 = 9;
		$var2 = 10;
		$sum = $var1 + $var2;
		echo nl2br ("Hello, World! \n");
		echo "Sum of $var1 and $var2 is $sum";
		
		if ($var1 == $var2)
			echo nl2br ("\n $var1 and $var2 are Equal");
		else
			echo nl2br ("\n $var1 and $var2 are Not Equal");
		
		echo nl2br ("\n"), MINSIZE;
		echo "\n", MINSIZE, "\n";
		echo constant("MINSIZE"); // same thing as the previous line
		
		define("ONE",  "first thing");
		define("TWO2", "second thing");
		define("2TWO", "second thing" );
		define("__THREE__", "third thing");
		
		echo ONE,"\n";
		echo TWO2,"\n";
		
		echo __THREE__;
		
		$d = date("D");
		$m = date("M");
		$y = date("Y");
         
         if ($d == "Fri")
            echo "Have a nice weekend!";
         
         elseif ($d == "Sun")
            echo "Have a nice Sunday!"; 
         
         else
            echo "Have a nice day!\n ", $d, $m, $y; 
	  ?>
	  
	  
   </body>

</html>
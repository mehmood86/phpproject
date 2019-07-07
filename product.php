<?php
	session_start();
	if(isset($_SESSION['username'])){
	  echo "<h2>Logged in as: ".$_SESSION['username']."</h2>";
	}
	else{
		echo "<script>location.href='login.php'</script>";
	}
?>
<html>

	<form class="form-horizontal" action="add_product.php" method="post">
		<fieldset>
			<a href='./welcome.php'>Home</a>

			<div class="form-group" >
				<label class="col-md-4 control-label" for="product_name">Product Name</label>
				<div class="col-md-4">
					<input id="product_name" name="product_name" placeholder="product name" class="form-control input-md" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="product_category">Product Category</label>
				<div class="col-md-4">
					<input id="product_category" name="product_category" placeholder="product category" class="form-control input-md" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="product_details">Product Details</label>
				<div class="col-md-4">
					<input id="product_details" name="product_details" placeholder="product details" class="form-control input-md" type="text">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="product_image">Product Image</label>
				<div class="col-md-4">
					<input id="product_image" name="product_image" placeholder="product image" class="form-control input-md" type="text">
				</div>
			</div>
			<!-- Button -->
			<div class="form-group">
				<div class="col-md-4">
					<button id="insert" name="insert" class="btn btn-primary">Insert</button>
				</div>
			</div>

		</fieldset>

</html>

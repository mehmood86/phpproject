<html>

<?php
	//session_start();
	if ($_POST["username"] == "mghaffar" && $_POST["password"] == "admin") {
		echo "Welcome   Mehmood Ghaffar";
	}else {
		header('Location: ./page1.php');
	}
	


?>

	<form class="form-horizontal">
		<fieldset>

		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product ID</label>
			<div class="col-md-4">
			<input id="product_id" name="product_id" placeholder="product id" class="form-control input-md" required="" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product Name</label>
			<div class="col-md-4">
			<input id="product_name" name="product_name" placeholder="product name" class="form-control input-md" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product Category</label>
			<div class="col-md-4">
			<input id="product_category" name="product_category" placeholder="product category" class="form-control input-md" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product Details</label>
			<div class="col-md-4">
			<input id="product_details" name="product_details" placeholder="product details" class="form-control input-md" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product ISN</label>
			<div class="col-md-4">
			<input id="product_isn" name="product_isn" placeholder="product isn" class="form-control input-md" type="text">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="product_id">Product Image</label>
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

<?php
  require_once 'config.php';
  session_start();
  if(isset($_SESSION['username'])){
    echo "<h2>Logged in as: ".$_SESSION['username']."</h2>";
  }
  else{
  	echo "<script>location.href='login.php'</script>";
  }

if( !empty($_POST['product_name'])  &&
    !empty($_POST['product_category']) &&
    !empty($_POST['product_details']) &&
    !empty($_POST['product_image'])
  ){
  //Form values stored in variables
  $name     = $_POST["product_name"];
  $category = $_POST["product_category"];
  $details  = $_POST["product_details"];
  $isn      = uniqid();
  $image    = $_POST["product_image"];

  // $sql_isn = "SELECT * FROM products WHERE isn=$isn";
  $sql = "INSERT INTO products (p_name, p_category, p_details, p_isn, p_image) VALUES ('$name', '$category', '$details', '$isn', '$image')";

  // echo $sql_isn;
  // echo $sql;
  echo "<br>Add Another<a href=' Product.php'><input type=button value=product name=product></a>";
  if ($conn->query($sql) === TRUE) {
    echo "<script> alert('New record created successfully')</script>";

  } else {
      echo  "<br><br>" ."Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}
else{
  echo "<br>Back to <a href=' Product.php'><input type=button value=product name=product></a><br>";
  echo '<span style="color: red;" />Some fields are not filled correctly!</strong>';
}
 ?>

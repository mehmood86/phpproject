
<?php
require_once 'config.php';

session_start();

if(isset($_SESSION['username'])){
  echo "<h2>Logged in as: ".$_SESSION['username']."</h2>";
  echo "<fieldset>Add a <a href='Product.php'> Product</a><br>";
  echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{

if(!empty($_POST['username']) && !empty($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users where username='$username' AND password='$password'";
  $resp = $conn->query($sql);
  $auth = $resp->fetch_assoc();

  if ($username==$auth['username'] && $password==$auth['password']){

    $_SESSION['username']=$auth['name'];
    echo "<script>location.href='welcome.php'</script>";
  }
  else{
    echo "<script>alert('Incorrect Username or Password')</script>";
    echo "<script>location.href='login.php'</script>";
  }
  }
else{
  echo "<script>location.href='login.php'</script></fieldset>";
}
}



?>

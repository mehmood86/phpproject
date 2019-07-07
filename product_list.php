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
  <body>
    <form class="form-horizontal" action="product_list.php" method="post">
  	<fieldset>
    <div class="form-group">
    	<div class="col-md-4">
    	   <input id="search" name="txt" placeholder="search by specific ISN"  type="text">
         <button id="search" name="search" class="btn btn-primary">Search</button>
  	  </div>
  	</div>
  	</fieldset>

  </body>
</html>
<?php
  require_once 'config.php';

  if(!empty($_POST['txt'])){
    $search_isn = $_POST['txt'];
    echo "Results for ISN: ".$search_isn;
  }
  else{
    echo "All records";
  }



  echo '<table border="2" cellspacing="2" cellpadding="2">
        <tr>
            <td> <h4><font face="Arial">Product Name  </font></h4> </td>
            <td> <h4><font face="Arial">Category      </font></h4></td>
            <td> <h4><font face="Arial">ISN           </font></h4> </td>
            <td> <h4><font face="Arial">Image         </font></h4> </td>
        </tr>';

  $sql='';
  if(!empty($search_isn)){
    $sql = "SELECT * FROM products WHERE p_isn='$search_isn'";
  }
  else{
    $sql = "SELECT * FROM products";
  }

  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $d1 = $row["p_name"];
        $d2 = $row["p_category"];
        $d3 = $row["p_isn"];
        $d4 = $row["p_image"];

        echo '<tr>
                <td>'.$d1.'</td>
                <td>'.$d2.'</td>
                <td>'.$d3.'</td>
                <td>'.$d4.'</td>
              </tr>';
      }
    }
    else {
        echo "0 results";
    }

    $conn->close();

?>

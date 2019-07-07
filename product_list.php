<?php
  require_once 'config.php';

  $sql = "SELECT * FROM products";
  $result = $conn->query($sql);

  echo '<table border="0" cellspacing="2" cellpadding="2">
        <tr>
            <td> <h4><font face="Arial">Product Name  </font></h4> </td>
            <td> <h4><font face="Arial">Category      </font></h4></td>
            <td> <h4><font face="Arial">ISN           </font></h4> </td>
            <td> <h4><font face="Arial">Image         </font></h4> </td>
        </tr>';


  if ($result->num_rows > 0) {
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
    } else {
        echo "0 results";
    }
    $conn->close();

?>

<?php
$conn = mysqli_connect('localhost', 'root', '') or die ('No connection');
mysqli_select_db($conn,'crms') or die (' DB will not open');
$query = "SELECT * from product ";
$result = mysqli_query($conn, $query) or die('Invalid query');
echo  "<table border='1'><tr><th>Product ID</th><th>Product Name</th><th>Quantity</th>
                 <th>Price</th></tr>";
                 while($row = mysqli_fetch_array($result))
  {
  echo "<tr><td>" . $row['pid'] . "</td><td>" . $row['pname'];
  echo "</td><td>" . $row['pq'] . "</td><td>" . $row['price']."</td></tr>";
  }
echo "</table>";
mysqli_close($conn);

?>
<?php
$conn = mysqli_connect('localhost', 'root', '') or die ('No connection');
mysqli_select_db($conn,'crms') or die (' DB will not open');
$query = "SELECT * from account ";
$result = mysqli_query($conn, $query) or die('Invalid query');
echo  "<table border='1'><tr><th>fullname</th><th>username</th><th>email</th>
                 <th>password</th></tr>";
                 while($row = mysqli_fetch_array($result))
  {
  echo "<tr><td>" . $row['fullname'] . "</td><td>" . $row['username'];
  echo "</td><td>" . $row['email'] . "</td><td>" . $row['password']."</td></tr>";
  }
echo "</table>";
mysqli_close($conn);

?>
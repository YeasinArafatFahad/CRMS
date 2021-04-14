<?php
$pid = filter_input(INPUT_POST, 'pid');
$pname = filter_input(INPUT_POST, 'pname');
$pq = filter_input(INPUT_POST, 'pq');
$price = filter_input(INPUT_POST, 'price');
if (!empty($pid)){
if (!empty($pname)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crms";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO product (pid, pname, pq, price)
values ('$pid','$pname','$pq','$price')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
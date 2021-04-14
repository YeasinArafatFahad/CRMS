<?php 
include('showdata.php'); 
$query="select * from account"; 
$result=mysqli_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Customer Record</h2></th> 
		</tr> 
			  <th> fullname </th> 
			  <th> username </th> 
			  <th> email </th> 
			  <th> password </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['fullname']; ?></td> 
		<td><?php echo $rows['username']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['password']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
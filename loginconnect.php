<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crms";
$connect = mysqli_connect ($host, $dbusername, $dbpassword, $dbname) or die ("Connection failed");
if(!empty($_POST['save']))
    {
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="select * from account where username= '$username' and password= '$password'";
    $result=mysqli_query($connect,$query);
        $count=mysql_num_rows($result);
        if($count>0)
        {
            echo "Successfull";
        }
        else
        {
            echo "Invalid";
        }
 
}
?>
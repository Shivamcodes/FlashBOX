<html>
<body>
<?php
$link=mysqli_connect("localhost","root","");
if(!$link)
{
	die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql="use dbwproj";
mysqli_query($link,$sql);
$email = $_POST['email'];

$sql = "SELECT * FROM login where EMAIL = '$email'";

if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_array($result);
    $message = "Email is verified and registered with us";
     echo "<script type='text/javascript'>alert('$message');</script>";
		 echo "Password Reset Link has been sent to your Email";
		 echo "<br>";
		 echo "Redirecting you to the login page in 5seconds";

}
else
    {echo "<p align='center'><font color='black' >Sorry! The Email you entered is not registered with us<font></p>";
		echo "<br>";
		echo "Redirecting you to the login page in 5seconds";
}
}
else{
  echo"failed";
}

header( "refresh:5;url=signin.html" );
exit;
?>
</body>
</html>

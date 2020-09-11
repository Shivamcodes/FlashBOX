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
$uname = $_POST['Username'];
$pass = $_POST['password'];

$sql="select * from login";
$result=mysqli_query($link,$sql);
if(!$result)
		echo " no query selected  ";$flag=0;
while($row=mysqli_fetch_array($result))
{

		if(($row['username']==$uname||$row['email']==$uname)&&$row['password']==$pass)

				{
		 echo"<h1 style='text-align:center'>$row[1] !!</h1>";
		echo "<script>setTimeout(\"location.href = 'homepagein.html';\",3000);</script>";

 $flag++;
break;}

 }
if($flag==0)
{echo"wrong username or password ";
	 echo "<script>setTimeout(\"location.href = 'signin.html';\",3000);</script>";
}
?>
</body>
</html>

<html>
<body>

<?php     
//start php tag
//include connect.php page for database connection
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="users";  //database name which you created
$conn=mysqli_connect($hostname,$username,$password,$database);
//if submit is not blanked i.e. it is clicked.

if(isset($_POST['submit']))
{
	if($_POST['name']=='' || $_POST['email']=='' || $_POST['phone']=='' || $_POST['password']==''|| $_POST['confirm']=='')
	{
		echo "please fill the empty field.";
	}
	else
	{
		$email = $_POST['email'];
		$query = "SELECT Email FROM user WHERE Email='$email'";
		$sql=mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)>=1) {
			echo "<script>alert('Unsuccessfull registration : Email already exist');
			window.location.href='order.php';</script>";
		}
		else {
		$sql="INSERT INTO user(Name,Email,PhoneNo,Password,ConfirmPassword) VALUES('".$_POST['name']."', '".$_POST['email']."','".$_POST['phone']."', '".$_POST['password']."', '".$_POST['confirm']."')";
		$res=mysqli_query($conn,$sql);
		if($res)
		{
			echo "<script>alert('Successfull registration : Please login to continue');
			window.location.href='order.php';</script>";
		}
		else
		{
			echo "There is some problem in inserting record". mysqli_error($conn);
		}
		}
	}
}
mysqli_close($conn);
?>
</body>
</html>
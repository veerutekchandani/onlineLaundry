<?php  
session_start();//session starts here  
  
?> 

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


if(isset($_POST['submit-login']))
{
	if($_POST['email-login']=='' || $_POST['password-login']== '')
	{
		echo "<script>alert('please fill login details');window.location.href='order.html';</script>";
	}
	else
	{
		$email = $_POST['email-login'];
		$password = $_POST['password-login'];
		$query = "SELECT Email,Password FROM user WHERE Email='$email'";
		$sql = mysqli_query($conn,$query);
		if(mysqli_num_rows($sql)>=1) {
			$query = "SELECT Email,Password FROM user WHERE Email='$email' AND Password='$password'";
			$sql = mysqli_query($conn,$query); 
			if(mysqli_num_rows($sql)>=1) {
				$_SESSION['email']=$email;
			echo "<script>window.location.href='orderlogin.html';</script>";
			}
			else {
				echo "<script>alert('Wrong Password !!');window.location.href='order.html';</script>";
			}
		}
		else {
			echo "<script>alert('Not Registered Yet : Please register to continue !!');window.location.href='order.html';</script>";
			exit;
		}
	}
}
mysqli_close($conn);
?>
</body>
</html>
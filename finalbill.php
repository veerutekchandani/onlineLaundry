<?php 
session_start();
?>
<?php

$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="users";  //database name which you created
$conn=mysqli_connect($hostname,$username,$password,$database);



$link=$_SERVER['REQUEST_URI'];
$url_components=parse_url($link);
parse_str($url_components['query'], $params);
$total=$params['total'];



if(isset($_POST["confirm"])) {
$sql="INSERT INTO Orders(Name,Email,Amount) VALUES('".$_SESSION['name']."','".$_SESSION['email']."','$total')";
$query=mysqli_query($conn,$sql);
if($query) {
	echo "<h3>Your Order is confirmed. Confirmation mail has been sent to you to your registered email id.</hr><br/><a href='logout.php'>Logout</a>";
}
else {
	echo "Error";
}
		$ToEmail = $_SESSION["email"]; 
		$EmailSubject = 'Order Confirmation mail';  
		$MESSAGE_BODY = "Hello ".$_SESSION["name"].", Your Order has been confirmed."; 
		$MESSAGE_BODY .= " Your total is ".($total)."\r\n";
		$MESSAGE_BODY .= "Thankyou.";
		if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY)){

		}
		
}
?>
<?php
session_start();
$tax=(0.18)*($_POST['total']);
$total=$tax+$_POST['total'];
?>
<style type="text/css">
	label {
		color:red;
		font-weight: bold;
	}
	h2 {
		color:green;
		font-size: 30px;
	}
</style>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>

<div style="margin:100px;margin-bottom: 30px;"><h1 style="display: inline;">Hello,</h1><h2 style="display: inline;"> <?php echo $_SESSION["name"]?></h2></div> 
<form  action="finalbill.php?total=<?php echo $total ?>" style="margin-left: 300px;margin-right: 700px;padding: 40px;border: 2px solid black;background-color: yellow;box-shadow:20px 20px 50px 10px pink inset;border-radius: 10px;" method="post">
	<label style="font-size: 30px;">Subtotal&nbsp;&nbsp; : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<p style="font-size: 30px;display: inline;">
		<?php echo $_POST['total'];?></p><br/><br/>
	<label style="font-size: 30px;">Tax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
    <p style="font-size: 30px;display: inline;">
    <?php 
        $tax=(0.18)*($_POST['total']);
        echo $tax;
    ?>
	</p>
	<br/><br/>
	<hr width="230px" style="margin-left: 0px;"><br/>
	<label style="font-size: 30px;">Total   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	<p style="font-size: 30px;display: inline;">
	<?php
		echo $tax+$_POST['total'];
	?>
	</p>
	<br/><br/> 
	<button  type="submit" name="confirm" class="btn btn-success" style="width: 150px;height: 60px;">Confirm</button>
</form>

<strong>Note* : Pay when we Collect clothes from your home</strong><br/><br/><br/>
</body>
</html>

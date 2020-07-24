<?php
session_start();
?>


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/orderlogin.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="script.js"></script>
   <script src="javascript/orderlogin.js"></script> 
</head>
<body>

<script>
	$(function(){
		$('.nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>

<div id='cssmenu'>
<ul class="nav">
   <li class="active"><a onclick="one()">Laundry</a></li>
   <li><a onclick="two()">Mens</a></li>
   <li><a onclick="three()">Womens</a></li>
   <li><a onclick="four()">Household</a></li>
   <li><a onclick="five()">Woollens</a></li>
</ul>
</div>


<div align="right" style="margin-right: 20px;font-size: 30px;">Welcome <?php echo $_SESSION["name"]; ?><br/><a href="logout.php">Logout</a></div>



<!-- FOR FIRST BUTTON - LAUNDRY -->
<div id="one" style="padding: 20px;">
  <ul style="list-style-type: none;">
  <li>
  	<input value="80" type="checkbox" style="height: 30px;width: 30px;" id="launcheck1" onclick="show('launcheck1','laundisplay1','launinput1')">
  	<label style="font-size: 30px;">Wash and Fold - Rs.80 perKg</label>
  </li>
  <li id="laundisplay1" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="launinput1" value="0"><button type="button" onclick="total('launinput1','launcheck1')">Add</button>
  </li>
  <li>
  	<input value="90" type="checkbox" style="height: 30px;width: 30px;" id="launcheck2" onclick="show('launcheck2','laundisplay2','launinput2')">
  	<label style="font-size: 30px;">Wash and Iron - Rs.90 perKg</label>
  </li>
  <li id="laundisplay2" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="launinput2"><button type="button" onclick="total('launinput2','launcheck2')">Add</button>
  </li>
  <li>
  	<input value="130" type="checkbox" style="height: 30px;width: 30px;" id="launcheck3" onclick="show('launcheck3','laundisplay3','launinput3')">
  	<label style="font-size: 30px;">Premium Laundry - Rs.130 perKg</label>
  </li>
  <li id="laundisplay3" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="launinput3"><button type="button" onclick="total('launinput3','launcheck3')">Add</button>
  </li>
</div>


<!-- FOR SECOND BUTTON - MENS -->
<div id="two" style="display:none;padding: 20px;">
  <ul style="list-style-type: none;">
  <li>
  	<input value="40" type="checkbox" style="height: 30px;width: 30px;" id="mencheck1" onclick="show('mencheck1','mendisplay1','meninput1')">
  	<label style="font-size: 30px;">Shirt - Rs.40 perKg</label>
  </li>
  <li id="mendisplay1" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="meninput1" value="0"><button type="button" onclick="total('meninput1','mencheck1')">Add</button>
  </li>
  <li>
  	<input value="35" type="checkbox" style="height: 30px;width: 30px;" id="mencheck2" onclick="show('mencheck2','mendisplay2','meninput2')">
  	<label style="font-size: 30px;">TShirt - Rs.35 perKg</label>
  </li>
  <li id="mendisplay2" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="meninput2"><button type="button" onclick="total('meninput2','mencheck2')">Add</button>
  </li>
  <li>
  	<input value="60" type="checkbox" style="height: 30px;width: 30px;" id="mencheck3" onclick="show('mencheck3','mendisplay3','meninput3')">
  	<label style="font-size: 30px;">Jeans - Rs.60 perKg</label>
  </li>
  <li id="mendisplay3" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="meninput3"><button type="button" onclick="total('meninput3','mencheck3')">Add</button>
  </li>
</div>

<!-- FOR THIRD BUTTON - WOMENS -->
<div id="three" style="display:none;padding: 20px;">
<ul style="list-style-type: none;">
  <li>
  	<input value="40" type="checkbox" style="height: 30px;width: 30px;" id="womencheck1" onclick="show('womencheck1','womendisplay1','womeninput1')">
  	<label style="font-size: 30px;">Top - Rs.40 perKg</label>
  </li>
  <li id="womendisplay1" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="womeninput1" value="0"><button type="button" onclick="total('womeninput1','womencheck1')">Add</button>
  </li>
  <li>
  	<input value="35" type="checkbox" style="height: 30px;width: 30px;" id="womencheck2" onclick="show('womencheck2','womendisplay2','womeninput2')">
  	<label style="font-size: 30px;">Skirt - Rs.35 perKg</label>
  </li>
  <li id="womendisplay2" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="womeninput2"><button type="button" onclick="total('womeninput2','womencheck2')">Add</button>
  </li>
  <li>
  	<input value="60" type="checkbox" style="height: 30px;width: 30px;" id="womencheck3" onclick="show('womencheck3','womendisplay3','womeninput3')">
  	<label style="font-size: 30px;">Jeans - Rs.60 perKg</label>
  </li>
  <li id="womendisplay3" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="womeninput3"><button type="button" onclick="total('womeninput3','womencheck3')">Add</button>
  </li>
</div>


<!-- FOR FOURTH BUTTON - HOUSEHOLD -->
<div id="four" style="display:none;padding: 20px;">
	<ul style="list-style-type: none;">
  <li>
  	<input value="30" type="checkbox" style="height: 30px;width: 30px;" id="housecheck1" onclick="show('housecheck1','housedisplay1','houseinput1')">
  	<label style="font-size: 30px;">Bath Towel - Rs.30 perKg</label>
  </li>
  <li id="housedisplay1" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="houseinput1" value="0"><button type="button" onclick="total('houseinput1','housecheck1')">Add</button>
  </li>
  <li>
  	<input value="40" type="checkbox" style="height: 30px;width: 30px;" id="housecheck2" onclick="show('housecheck2','housedisplay2','houseinput2')">
  	<label style="font-size: 30px;">BedSheet Single - Rs.40 perKg</label>
  </li>
  <li id="housedisplay2" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="houseinput2"><button type="button" onclick="total('houseinput2','housecheck2')">Add</button>
  </li>
  <li>
  	<input value="60" type="checkbox" style="height: 30px;width: 30px;" id="housecheck3" onclick="show('housecheck3','housedisplay3','houseinput3')">
  	<label style="font-size: 30px;">BedSheet Double - Rs.60 perKg</label>
  </li>
  <li id="housedisplay3" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="houseinput3"><button type="button" onclick="total('houseinput3','housecheck3')">Add</button>
  </li>
</div>


<!-- FOR FIFTH BUTTON - WOOLLEN -->
<div id="five" style="display:none;padding: 20px;">
	<ul style="list-style-type: none;">
  <li>
  	<input value="30" type="checkbox" style="height: 30px;width: 30px;" id="woolcheck1" onclick="show('woolcheck1','wooldisplay1','woolinput1')">
  	<label style="font-size: 30px;">Inner - Rs.30 perKg</label>
  </li>
  <li id="wooldisplay1" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="woolinput1" value="0"><button type="button" onclick="total('woolinput1','woolcheck1')">Add</button>
  </li>
  <li>
  	<input value="40" type="checkbox" style="height: 30px;width: 30px;" id="woolcheck2" onclick="show('woolcheck2','wooldisplay2','woolinput2')">
  	<label style="font-size: 30px;">Half Sweater - Rs.40 perKg</label>
  </li>
  <li id="wooldisplay2" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="woolinput2"><button type="button" onclick="total('woolinput2','woolcheck2')">Add</button>
  </li>
  <li>
  	<input value="60" type="checkbox" style="height: 30px;width: 30px;" id="woolcheck3" onclick="show('woolcheck3','wooldisplay3','woolinput3')">
  	<label style="font-size: 30px;">Full Sweater - Rs.60 perKg</label>
  </li>
  <li id="wooldisplay3" style="display: none;">
  	<label>Quantity :&nbsp;&nbsp;</label>
  	<input type="text" id="woolinput3"><button type="button" onclick="total('woolinput3','woolcheck3')">Add</button>
  </li>
</div>

<form action="bill.php" method="post">
<div style="padding-left: 300px;padding-top: 200px;">
<button type="submit" class="btn btn-success">Order</button>
&nbsp;
<label>Total</label>&nbsp;&nbsp;<input type="text" name="total" id="total" value="0">
</div>
</form>



<script>
function show(check1,inputid1,input1) {
	var checkbox = document.getElementById(check1);
	var input = document.getElementById(inputid1);
	if(checkbox.checked==true) {
		input.style.display="block";
	}
	else {
		input.style.display="none";
		subtract(check1,input1);
	}
}
function total(check1,inputid1) {
	var total,n,value;
	n=document.getElementById(check1).value;
	n=parseInt(n);
	value=document.getElementById(inputid1).value;
	value=parseInt(value);
	total=document.getElementById("total").value;
	if(isNaN(total)) {
		total=0;
	}
	total=parseInt(total);
	total+=n*value;
	total=parseInt(total);
	document.getElementById("total").value=total;
}
function subtract(check1,inputid1) {
	var total,n,value;
	n=document.getElementById(check1).value;
	n=parseInt(n);
	value=document.getElementById(inputid1).value;
	value=parseInt(value);
	total=document.getElementById("total").value;
	total=parseInt(total);
	total-=n*value;
	total=parseInt(total);
	document.getElementById("total").value=total;
	document.getElementById(inputid1).value = 0;
}
</script>


</body>
<html>



<?php
if(!isset($_SESSION["name"])) {
  echo "<script>alert('Please login first');window.location.href='order.php';</script>";
}
?>
</body>
</html>
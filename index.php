<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="image/jpg" href="01.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="mainBase">
	<!--Second Layer | Pager-->
	<div class="headerDiv">
		<table>
			<tr>
				<label class="titlePage"> Netwoking </label>
				<br>
			</tr>
		</table>
	</div>
		<!--Menu Item and Search Bar-->
		<div class = "menuItem">
			<a class = "linker" href="home.php" id = "home">Home</a>
			<a class = "linker" href="AboutUs.php" id = "AboutUs" href="">About Us</a>
			<a class = "linker" href="packet.php" id = "pack" >PACKET TRACER</a>
			<a class = "linker" href="des.php" id = "Destinations">NETWOKING TOOLS</a>
		
		</div>	
</div>
	<img class = "x" src="02.jpg" width="105%" height="100%">
<img class = "x" src="3.jpg" width="105%" height="100%">
<img class = "x" src="4.jpg" width="105%" height="100%">
</html>
<script type="text/javascript">
var myIndex = 0;
pageslide();
function pageslide()
{
var i;
var w = document.getElementsByClassName("x");
for (i = 0; i < w.length; i++)
{
w[i].style.display = "none";
}
myIndex++;
if (myIndex > w.length)
{
myIndex = 1
}
w[myIndex-1].style.display = "block";
setTimeout(pageslide,1000);
}
</script>

</div>
<img id = "img" src="01.jpg" width="100%" height="40%">
</body>
</html>

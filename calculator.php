<?php
session_start();
if(!isset($_SESSION['userId']))
{
    header('Location: http://localhost:8080/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
 <body>
   <form action="logout.php" method="post"  style="text-align:right">
      <input type="submit" value="Logout" id="logout" style="color:yellow;background-color:red">  
   </form>   
 </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Calculator</title>
		<script>
			var A,B,f;
		function calculation(f){
			A = parseFloat(f.A.value);
			B = parseFloat(f.B.value);
			var sum = A + B;
			var pro = A * B;
			var rat = A / B;
			if( A > B ){
				var dif = A - B;
			}
			else{
				var dif = B - A;
			}
			f.SUM.value = sum;
			f.DIF.value = dif;
			f.PRO.value = pro;
			f.RAT.value = rat;
		}
		</script>
				
	</head>
	<body style="text-align:center;background-color:green">
		<h1 style="background-color:yellow;color:red">Simple Calculator</h1>
		<form>
		<div style="background-color:pink"><hr><br>
			<b><span style="color:blue">Enter Number A : </b><input type="text" placeholder="First Number" name="A" value="" required><br><br>
			<b><span style="color:blue">Enter Number B : </b><input type="text" placeholder="Second Number" name="B" value="" required><br><br>
			<input type="button" value="Find Result" onClick="calculation(this.form)" style="background-color:yellow"><br><br>
		</hr></div>
		<div style="background-color:yellow;align:center"><hr>
			<b><span style="color:blue">SUM : </b><input type="text" name="SUM" value=""><br><br>
			<b><span style="color:blue">DIFFERENCE : </b><input type="text" name="DIF" value=""><br><br>
			<b><span style="color:blue">PRODUCT : </b><input type="text" name="PRO" value=""><br><br>
			<b><span style="color:blue">RATIO : </b><input type="text" name="RAT" value=""><br><br>
		</hr></div>
		</form>
	<footer style="background-color:pink;color:red">
		<h5><span >Posted by : RootCyberjet</h5>
	</footer>
	</body>
</html>
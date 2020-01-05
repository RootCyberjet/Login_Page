<?php
   
    $hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "phonebook";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	  
	  
      $myusername = $_POST['username'];
      $mypassword1 = $_POST['password1'];
	  $mypassword2 = $_POST['password2'];	  
	  
      if( $mypassword1 == $mypassword2){
		  $mypassword = $mypassword1;
		  $Hpassword = md5($mypassword);
		  $mysqli = new mysqli($hostname, $username, $password, $database);
		  $sql = "INSERT INTO userdata(username,password) VALUES('$myusername','$Hpassword')";
		  $mysqli->query($sql);
			echo'<script>alert("Sign in successfully !!!!\nPlease Login Now !!!!");</script>';
			echo"<script>setTimeout(\"location.href = 'http://localhost:8080/login.php';\",1000);</script>";
			
	  }
	  else{
		  echo'<script>alert("Password verification failed. Please try again !!!!");</script>';
		  echo"<script>setTimeout(\"location.href = 'http://localhost:8080/signin.php';\",1000);</script>";
			
	  }
      	
   }
?>
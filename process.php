<?php
	session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'phonebook');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  
	 $Hpassword = md5($mypassword);
      
      $sql = "SELECT id FROM userdata WHERE username = '$myusername' and password = '$Hpassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
		 $_SESSION['userId'] = $myusername;
         echo'<script>alert("Login successfully !!!!");</script>';
		 echo"<script>setTimeout(\"location.href = 'http://localhost:8080/calculator.php';\",1000);</script>";

      }else {
         echo'<script>alert("INVALID USERNAME OR PASSWORD !!!!!");</script>';
		 echo"<script>setTimeout(\"location.href = 'http://localhost:8080/login.php';\",1000);</script>";
			
      }
   }
?>
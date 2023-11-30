<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INVENTORY MANAGER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  
	
<body>
	 <h1>Manager Credentials required</h1>
	 <div class="container">
        <form id="form" action="" method="post">
            <h1>SIGN IN</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
               
            </div><br>
           
            <div class="input-control">
                <label for="password">Password</label>
               <img src="images/eye-open.png" id="eyeicon">
                <input id="password" type="password" name="password">
                
            </div><br>
            
            
          
            <input type="submit" name="signin" value="Sign in" class="btn">  
        </form>

    </div>
    <script>
      	
		let eyeicon=document.getElementById("eyeicon");
		let password=document.getElementById("password");
		
		eyeicon.onclick = function(){
			if(password.type=="password"){
				password.type="text";
                eyeicon.src="IMAGES/eye-close.png";
			}else{
				password.type="password";
                eyeicon.src="IMAGES/eye-open.png";
			}
		}
    </script>
       
</body>
</html>

<?php
include("connection.php");

if (isset($_POST["signin"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password' AND personnel_type = 'manager'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: view_asset.php");
        exit();
    } else {
         ?>
            <script type="text/javascript">
                window.alert("Invalid credentials");
                window.location = "Homepage.html";
            </script>
            <?php
    }
}
?>

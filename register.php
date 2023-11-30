<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASSET MANAGER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  
	
<body>
	 <h1>Welcome to Asset Manager</h1>
	 <div class="container">
        <form id="form" action="" method="post">
            <h1>SIGN UP</h1>
            <div class="input-control">
                  <label for="personnel">Personnel Type
    <select id="personnel" name="personnel_type">
         <option value="manager">Manager</option>
         <option value="admin">Administrator</option>
         <option value="staff">Staff</option>
     </select></label>
            </div><br>
            <div class="input-control">
                <label for="username">Username
                <input id="surname" name="username" type="text">
               </label>
            </div><br>
           
            <div class="input-control">
                <label for="password">Password
               <img src="images/eye-open.png" id="eyeicon1">
                <input id="password"  type="password" name="password">
                </label>
            </div><br>
            
             <div class="input-control">
                <label for="confirmpassword">Confirm Password
               <img src="images/eye-open.png" id="eyeicon2">
                <input id="confirmpassword" type="password" name="confirmpassword">
                </label>
            </div><br>
          
               <input type="submit" name="register" value=" Signup " class="btn">
        </form>

    </div>
    <script>
      	
		let eyeIcon1 = document.getElementById("eyeicon1");
let password1 = document.getElementById("password");
let eyeIcon2 = document.getElementById("eyeicon2");
let password2 = document.getElementById("confirmpassword");

eyeIcon1.onclick = function() {
  if (password1.type === "password") {
    password1.type = "text";
    eyeIcon1.src = "IMAGES/eye-close.png";
  } else {
    password1.type = "password";
    eyeIcon1.src = "IMAGES/eye-open.png";
  }
};

eyeIcon2.onclick = function() {
  if (password2.type === "password") {
    password2.type = "text";
    eyeIcon2.src = "IMAGES/eye-close.png";
  } else {
    password2.type = "password";
    eyeIcon2.src = "IMAGES/eye-open.png";
  }
};

  
        
    </script>

</body>
</html>
<?php


include("connection.php");

if (isset($_POST["register"])) {
    $personnel_type = $_POST["personnel_type"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Check if passwords match
    if ($password !== $confirmpassword) {
        ?>
        <script type="text/javascript">
            window.alert("Passwords do not match!");
        </script>
        <?php
    } else {
        $sql = "INSERT INTO register(`personnel_type`, `username`, `password`)
        VALUES('$personnel_type', '$username', '$password')";

        if (mysqli_query($con, $sql)) {
            ?>
            <script type="text/javascript">
                window.alert("Registration successfull");
                window.location = "login.php";
            </script>
            <?php
        }
    }
}

?>

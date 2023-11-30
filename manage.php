<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
<body>
    
     <input type="checkbox" name="" id="check" class="app">
    <div class="menu">
        <label for="check">
           <span class="fa-solid fa-square-xmark" id="times"></span>
           <span class="fa-solid fa-bars" id="bar"></span>
        </label>
       <div class="head">menu</div>
        <ul>
           <li><a href="Homepage.html">Dashboard</a></li>
           <li><a href="assetlogin.php">Inventory</a></li>
            <li><a href="adminlogin.php">Administrator</a></li>
            <li><a href="about.html">About us</a></li>
        </ul>
     </div>
    
    <header>
       <h1>ASSET MANAGER</h1> 
    </header>
      <div class="manager">
      <div class="cards">
          <div class="display"><img src="IMAGES/122.jpg"></div>
            <form action="" method="POST">
    
            
            <label for="fname">Name</label><br>
            <input type="text" id="fname" name="name"><br><br><br>

            <label for="description">Description</label><br>
            <input type="text" id="description" name="description"><br><br><br>
                
            <label for="qty">Quantity</label>
    <select id="qty" name="quantity">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
     </select><br><br><br><br><br>
          
       <input type="submit" name="submit" value=" Add item" class="btn">
          </form>
          
          </div>
    
     </div>
    
    </body>
    
</html>

<?php


include("connection.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];


        $sql = "INSERT INTO asset(`name`, `description`, `quantity`)
        VALUES('$name', '$description', '$quantity')";

        if (mysqli_query($con, $sql)) {
            ?>
            <script type="text/javascript">
                window.alert("Item Successfully added");
                window.location = "manage.php";
            </script>
            <?php
        }
    }


?>
 
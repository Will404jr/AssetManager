<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedAsset = $_POST['asset'];
    $personnelName = $_POST['personnel'];

    $query = "UPDATE asset SET personnel_in_charge = '$personnelName' WHERE name = '$selectedAsset'";
    mysqli_query($con, $query);
}

$query = "SELECT name FROM asset WHERE personnel_in_charge IS NULL";
$result = mysqli_query($con, $query);
$options = "";

while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='".$row['name']."'>".$row['name']."</option>";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
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
          <div class="display"><img src="IMAGES/60111.jpg"></div>
          
         

<form method="POST" >
    <label for="asset">Select an Asset:</label>
    <select name="asset">
        <?php echo $options; ?>
    </select>
    <br><br><br><br>
    <label for="personnel">Personnel's Name:</label><br>
    <input type="text" name="personnel">
    <br><br><br><br>
    <input type="submit" value="Assign Personnel" class="btn" style="background-color:aqua;">
</form>

          </div>
    
     </div>
    </body>
</html>

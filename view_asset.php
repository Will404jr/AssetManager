<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ASSETS</title>
	<link rel="stylesheet" type="text/css" href="assetstyle.css">
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
    </header><br><br>
       <div class="controlbuttons" align="center">
         <button><a href="view_asset.php">All Assets</a></button>
         <button><a href="view_asset2.php">Assigned Assets</a></button>
         <button><a href="view_asset1.php">Unassigned Assets</a></button>
           </div>
    
  
    <table  style="color: white; width: 100%;  padding: 50px; ">
        <thead style="background-color: aqua; color: black; padding: 10px; font-size: 30px;">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody style="padding: 10px; text-align: center; font-size: 20px;">
<?php
include("connection.php");
$query = "SELECT * FROM asset";

$result = mysqli_query($con, $query);
            
while($row = mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "</tr>";
}

?>
        </tbody>
    </table>
     
    </body>
</html>
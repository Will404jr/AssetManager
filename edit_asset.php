<?php
include("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $assetId = $_POST['asset_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];

    // Update the asset details in the database
    $updateQuery = "UPDATE asset SET name = '$name', description = '$description', quantity = '$quantity' WHERE id = '$assetId'";
    mysqli_query($con, $updateQuery);

    // Redirect back to the original page or any desired location
    echo "<script>alert('Asset updated!');</script>";
    header("Location: admin.php");
    exit();
}

// Check if the asset ID is provided in the query parameter
if (isset($_GET['id'])) {
    $assetId = $_GET['id'];

    // Retrieve the asset details from the database
    $query = "SELECT * FROM asset WHERE id = '$assetId'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    // Redirect to the original page or any desired location if the asset ID is not provided
    header("Location: admin.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EDIT ASSET</title>
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
           <li><a href="view_asset.php" onclick="prompt('Provide Manager Password');">Inventory</a></li>
            <li><a href="admin.php">Administrator</a></li>
            <li><a href="about.html">About us</a></li>
        </ul>
     </div>
    
    <header>
       <h1>ASSET MANAGER</h1> 
    </header>
      <div class="manager">
      <div class="cards">
          <div class="display"><img src="IMAGES/122.jpg"></div>
            <form method="POST">
        <input type="hidden" name="asset_id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br><br><br>
        <label for="description">Description:</label><br>
        <input type="text" name="description" value="<?php echo $row['description']; ?>">
        <br><br><br>
        <label for="quantity">Quantity:</label><br>
        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
        <br><br><br>
        <input type="submit" value="Update" class="btn">
    </form>
          
          
          </div>
    
     </div>
   <script>
        function showAssetUpdatedAlert() {
            alert("Asset updated!");
        }
    </script>
   
    </body>
    
</html>


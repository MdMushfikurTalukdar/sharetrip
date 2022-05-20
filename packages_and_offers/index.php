<?php
include_once "../connection.php";
$price = 2;
$bon = 0.1;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1 style="display:flex;justify-content: center;align-items: center; text-shadow: 0 0 10px white;">You Can Choose Your Desired Package From The Available Packages</h1>
<div class="container">
	
	<div class="card">
  <div class="card-image"></div>
  <div class="card-text">
    
    <h2>Round Trip with 10% off</h2>
    
  </div>
  <div class="card-stats">
    
  <a href="../index.php?price=<?php echo $price; ?> && ?bon=<?php echo $bon; ?>"> <button id="btn">Buy</button></a>

  </div>
</div>

<div class="card">
  <div class="card-image"></div>
  <div class="card-text">
   
    <h2>Whole day Journey With Food</h2>
   
  </div>
  <div class="card-stats">
    <button id="btn">Buy</button>
  </div>
</div>

<div class="card">
  <div class="card-image"></div>
  <div class="card-text">
    
    <h2>Journey With Safety Guard</h2>
  
  </div>
  <div class="card-stats">
    <button id="btn">Buy</button>
  </div>
</div>
</div>
</body>
</html>





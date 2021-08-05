<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	
	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>
<div class="container">
	

		<div  id="hotdog">
			<div class="form-control">
				<form>
					<input type="search" class="hotdog " placeholder="Search">
				</form>
			</div>
</div>
<div class="container">


	<h2>available Products  </h2>
<?php

   include_once "lib/php/functions.php"; 
   include_once  "parts/templates.php";

  $result = makeQuery(
  	makeConn(),
  	 "
  	 SELECT * 
  	 FROM `Products`
 
  	  "
  	);

    echo "<div class='productlist grid gap'>", array_reduce($result, 'productListTemplate'),"</div>";

?>

</div>

<br>
<?php include "parts/footer.php"; ?>

</body>
</html>


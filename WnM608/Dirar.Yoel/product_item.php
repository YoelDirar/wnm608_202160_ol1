 <?php 

 include_once "lib/php/functions.php"; 
  
  $product =makeQuery(makeConn(), "SELECT * FROM `Products` WHERE `id` =".$_GET['id'])[0];


$images = explode(",", $product->images);

$image_elements = array_reduce($images, function($r,$o){
	return $r. "<img src='/img/$o'>";
});
 // print_p($product);
  
  ?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Product Item  </title>

	<?php include "parts/meta.php";?>
	
</head>
<body>

<?php include "parts/navbar.php"; ?>

<script src="js/product_thumbs.js"></script>

<div class="container">
	<div class="grid gap">
		<div class="col-xs-12 col-md-7">
			<div class="card soft">
				<div class="images-main">
				      <img src= "img/<?= $product->thumbnail ?>">
				</div>
				<div class="images-thumbs">
			       <?=	$image_elements ?> 
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-5">
			<div class="card soft flat">
				<div class="card-section">
				  <h2 class="product-name"><?= $product->product_name ?></h2>
				  <div class="product-price">&dollar;<?= $product->price ?></h2>
                </div>

                <div class="card-section">
                	<label for="product-amount" class="form-label">Amount</label>
                	<div class="form-select" id="product-amount">
                       <select>
				         <option>1</option>
				         <option>2</option>
				         <option>3</option>
				         <option>5</option>
				         <option>6</option>
				         <option>7</option>
				         <option>8</option>
				         <option>9</option>
				         <option>10</option>
			           </select>					
                   </div>
                </div>
				 <div class="card-section">
				 	<a href="product_added_to_cart.php?id=<?= $product->id ?>" class = "form-button">Add to Cart</a>
				 </div>
			</div>

		</div>
	</div>	

	
</div>	
	
<div class="card soft light">
		<p><?= $product->description ?></p>
	</div>

</body>
</html>
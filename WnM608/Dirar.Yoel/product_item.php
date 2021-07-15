<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Item  </title>
<?php include "parts/meta.php";?>
	
</head>
<body>
		<?php include "parts/navbar.php"; ?>



<div class="container">
		<h2>Product Item </h2>

		<p>This is item # <?= $_GET['id'] ?></p>

	<div class="card soft">
		<div class="container">
	<div class="grid gap xs-small md-medium">
		<!-- .col-xs-6.col-md-3*4>.card>{card} -->
		<div class="col-lg-5 col-md-3">
		
		<h3>Save</h3>
				<div class="favorite">
				<input type="checkbox" id="heart-example" class="hidden"> 
				<label for="heart-example">&hearts;</label>
				</div>
		<img src="https://via.placeholder.com/500" alt=""  class="media-image">
		
		</div>
 
</div>
</div>
<div class="container display-flex">
		
		   <div class="flex-none">
	<button >Add to cart</button>
	<a href="checkout.php"><button>checkout</button></a>
</div>	
	</div>
	</div>
	<?php include "parts/footer.php"; ?>

</body>
</html>
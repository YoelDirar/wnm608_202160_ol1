
<?php 

 include_once "lib/php/functions.php"; 
 include_once "parts/templates.php";
  
  //$cart = makeQuery(makeConn(), "SELECT * FROM `Products` WHERE  `id` IN (2,1,3)");

 $cart_Items = getCartItems();

  
  ?><html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php";?>

	<div class="container">
		<h2> In Your Cart </h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_Items, 'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>
    </div>

</body>
</html>
<?php 

include_once "lib/php/functions.php";
 ?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php";?>

	<div class="container">
		<div class="card soft">
			<h2> Product Checkout </h2>

       <form class="form">
		<h3>Address</h3>
		

				<div class="from-control">
					<label for="address-street" class="form-label">Street</label>
					<input id="address-street" type="text" placeholder="Street name" class="form-input">
				</div>

				<div class="from-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
					<label for="address-city" class="form-label">City</label>
					<input id="address-city" type="text" placeholder="City" class="form-input">
				</div>
			</div>
			    	<div class="col-xs-12 col-md-6">
				     	<label for="address-State" class="form-label">State</label>
					    <input id="address-State" type="text" placeholder="State" class="form-input">
				   </div>

				   <div class="from-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
					<label for="address-zip" class="form-label">Zip</label>
					<input id="address-zip" type="text" placeholder="Zip" class="form-input">
				</div>
					<div class="col-xs-12 col-md-6">
				     	<label for="address-country" class="form-label">Country</label>
					    <input id="address-country" type="text" placeholder="Country" class="form-input">
				   </div>
				</div>
     	   </div>
     	  
		
			<h3>Payment </h3>
				
			      <div class="form-control">
			      	<label for="payemnt-name" class="form-label">Full Name</label>
			      	<input id="payemnt-name" type="text" placeholder="Name" class="form-input">
			      </div>
			      <div class="from-control">
			      	<label for="payemnt-number" class="form-label">Card Number</label>
			      	<input id="payemnt-number" type="text" placeholder="####-####-####-####" class="form-input">
			      </div>
			      <div class="form-control">
			      	 <div class="grid gap">
			      	 	<div class="col-xs-12 col-md-6">
			      	      <label for="payment-experation" class="form-label">Expiration</label>
			      	      <input id="payment-experation" type="text" placeholder="MM-YY" class="form-input">
			      	    </div>
			      	    <div class="col-xs-12 col-md-6">
			      	    	 <label for="payemnt-cvv" class="form-label">CVV</label>
      					     <input id="payemnt-cvv" type="text" placeholder="CVV" class="form-input">
			      	 </div>
			      </div>
			      <div class="form-control">
			      	<label for="payment-zip" class="form-label">Zip Code</label>
			      	<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
			      </div>
			      <div class="form-control">
			<!--       	<input type="submit" class="form-button" value="submit"> -->
			<a href="product_confirmation.php" class="form-button">Complte  Checkout</a>
			      </div>
			    </form>


		
			<P> </P>
		</div>
    </div>

</body>
</html>
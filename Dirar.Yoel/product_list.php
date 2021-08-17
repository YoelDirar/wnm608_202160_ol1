<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<?php include "parts/meta.php"; ?>
	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>


<body>

	    <?php include "parts/navbar.php"; ?>

      
	

  
     <div class="container">
		      <h2>available Products </h2>

<!--------search----------->
	
			<form class="hotdog light" id="product-search" >
				<input type="search" placeholder="Search">
			</form>
	<!------------- FILTER BUTTONS & SORT SIDE BY SIDE -------------------->

<!-- 		<div class="form-control display-flex filternsort">
			<div class="card soft"> 
				<div class="display-flex">
			<div class="flex-stretch display-flex">
		
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button"  class="form-button">All</button>
				 </div>
					<div class="flex-none">
					<button data-filter="category" data-value="pet friendly" type="button" class="form-button">Pet Friendly</button>
				</div>	
				<div class="flex-none">
					<button data-filter="category" data-value="low maintenance" type="button" class="form-button">Low Maintenance </button>
				</div>

	     </div>
		<div class="flex-none">
			<div class="form-select">
           <select class="js-sort">
				         <option value="1">Newest</option>
				         <option value="2">Oldest</option>
				           <option value="3">Least Expensive</option>
				         <option value="4">Most Expensive </option>
				    
			      </select>
			  </div>				
		</div>
	</div>
	</div>





</body>
</html> -->
	<div class="form-control display-flex filternsort">
			<div class="card soft"> 
				<div class="display-flex">
			<div class="flex-stretch display-flex">
		
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button"  class="form-button">All</button>
				 </div>
					<div class="flex-none">
					<button data-filter="category" data-value="pet friendly" type="button" class="form-button">Pet Friendly</button>
				</div>	
				<div class="flex-none">
					<button data-filter="category" data-value="low maintenance" type="button" class="form-button">Low Maintenance </button>
				</div>

	     </div>
		<!-- dropdown menu sort -->
				<div class="form-select sort">	
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price: Low to High</option>
						<option value="4">Price: High to Low</option>
					</select>
				</div>
			</div>

		<div class='productlist grid gap'>
			
		</div>
		</div>
</div>

		<?php include "parts/footer.php"; ?>
	
 </body>
</html>


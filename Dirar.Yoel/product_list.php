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
	
<div class="search-box" id="product-search" >
	<form class="search-box" id="product-search">
  <input class="search-input" type="text" placeholder="Search something..">
  <button-search class="search-btn"><i class="fas fa-search"></i></button>
</div>




			<!-- <div class="box">
				<form class="search-box" id="product-search">
					
					<input type="search" placeholder="What are you looking for?">
					<button-search class="search-btn"><i class="fas fa-search"></i></button>
				</form>
			</div> -->
<!------------- FILTER BUTTONS & SORT SIDE BY SIDE -------------------->


	<div class="form-control display-flex filternsort">
			<div class="card soft"> 
				<div class="display-flex">
			<div class="flex-stretch display-flex">
		
				<div class="flex-none">
					<button data-filter="category" data-value="" type="button"  class="button">All
                   	  <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                  </button>
              </div>

				<div class="flex-none">
					<button data-filter="category" data-value="pet friendly" type="button" class="button">Pet Friendly
					   	<span></span>
                        <span></span>
        				<span></span>
        				<span></span>
        			</button>
				 </div>

				<div class="flex-none">
					<button data-filter="category" data-value="low maintenance" type="button" class="button">Low Maintenance
					    <span></span>
      					<span></span>
        				<span></span>
       					<span></span> </button>
				</div>

	     </div>
		<!-- dropdown menu sort -->
				<div class="box">	
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


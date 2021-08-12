<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";
 ?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PlanetPlants</title>
	
	<?php include "parts/meta.php"; ?>

</head>

	<?php include "parts/navbar.php"; ?>

<div class="view-window" style="background-image:url('img/banner.jpeg')">
			<h1 class="hero_text">"PLants make people happy",</h1>
</div>
		


		
<div class="container ">
		<article id="article1" class=" article card soft ">

			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>WELCOME TO The community</h2>
				</div>
				<div clsas="flex-none"></div>		
			</div>
			
			<div class="article-body">
				<p>
					We serve our customers with beautiful plants which are completely sustainable in our glorious Bay Area climate(s). Specializing in low water and drought tolerant plants from Mediteranian-like and arid regions of the world, we focus on succulents and cacti, rare, BIZARRE, and very unusual plants, along with a few monstrose, caudiciforms, and crests. Thank you all for being a part of our community.
				</p>
			</div>
		</article>	
</div>

<div class="container">
	
	<h2>Recomended Pet friendly plants<h2>
	<?php recommendedCategory("pet friendly");?>
     <h2>Popular Low Maintenance<h2>
    <?php recommendedCategory("low maintenance");?>
	 
</div>

	
	

	<?php include "parts/footer.php"; ?>
	
</body>

</html>

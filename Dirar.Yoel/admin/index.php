<?php

include "../lib/php/functions.php";


$empty_product = (object)[
"product_name"=>"Corn Plant",
"price"=>"15.99",
"description"=>"well known indoor plant which is grown in many homes and offices within the US, UK and Europe.",
"category"=>"Easy and Low Light",
"thumbnail"=>"corn_plant_thumbnail.jpg",
"images"=>"corn_plant.jpg",
"quantity"=>"2"
];


 

//Logic
try  {
	$conn = makePDOConn();
 	switch($_GET["action"]) {
       case "update":
       $statement = $conn->prepare("UPDATE
    	`Products`
    	SET 
    	`product_name`=?,
    	`price`=?,
    	`quantity`=?,
    	`category`=?,
    	`description`=?,
    	`thumbnail`=?,
    	`images`=?,
    	`date_modify`=NOW()
    	WHERE `id`=?
    	");
       $statement->execute([
    	$_POST['product-product_name'],
    	$_POST['product-price'],
    	$_POST['product-quantity'],
    	$_POST['product-category'],
    	$_POST['product-description'],
    	$_POST['product-thumbnail'],
    	$_POST['product-images'],
    	$_GET['id']
        ]);
       header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
       break;
    case "create":

       $statement = $conn->prepare("INSERT INTO
    	`Products`
    	SET 
    	(
    		`product_name`,
    		`price`,
    		`quantity`,
    		`category`,
    		`description`,
    		`thumbnail`,
    		`images`,
    		`date_create`,
    		`date_modify`
    	)
    	VALUES (?,?,?,?,?,?,?,NOW(),NOW())
    	");
       $statement->execute([
    	$_POST['product-product_name'],
    	$_POST['product-price'],
    	$_POST['product-quantity'],
    	$_POST['product-category'],
    	$_POST['product-description'],
    	$_POST['product-thumbnail'],
    	$_POST['product-images'],
        ]);
       $ID = $conn->lastInsertID();
      
       header("location:{$_SERVER['PHP_SELF']}?id=$id");
       break;
    case "delete":
       header("location:{$_SERVER['PHP_SELF']}");
       break;
 	} 
}  catch(PDOException $e){
	die($e->getMessage());
}







//TEMPLATES 

function productListItem($r,$o){
return 
$r.<<<HTML
<div class="card soft">
	<div class="display-flex">
		<div class ="flex-none images-thumbs"><img src='img/$o->thumbnail'></div>
		<div class ="flex-stretch" style="padding:1em">$o->product_name</div>
			<div class ="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
	</div>
	</div>
HTML;
}

function showProductPage($o){

  $id = $_GET['id'];
  $addoredit = $id == "new" ? "Add" : "Edit"; 
  $createorupdate  = $id == "new" ? "create" : "update"; 
	$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='/img/$o'>";});

$display =    <<<HTML
		
	

			<h2>$o->product_name</h2>
			<div class ="form-control">
				<label class="form-label">price</label>
				<span>&dollar;$o->price</span>
			</div>	
			<div class ="form-control">
				<label class="form-label">Category</label>
				<span>$o->category</span>
			</div>
			<div class ="form-control">
				<label class="form-label">Quanitity</label>
				<span>$o->quantity</span>
			</div>
			<div class ="form-control">
				<label class="form-label">Thumbnail</label>
				<span class="images-thumbs"><img src="img/$o->thumbnail"></span>
			</div>'
				<div class ="form-control">
				<label class="form-label">Description</label>
				<span>$o->description</span>
				<div class ="form-control">
				<label class="form-label">Other Images</label>
				<span  class="images-thumbs">$o->images</span>
			</div>

		
		
HTML;

$form = <<<HTML
		
    <form method="post" action=" {$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	     <h2>$addoredit Product<h2>
			<div class="form control">
		       <label class="form-label" for="product-product_name">Name</label>
			    <input 
			       class="form-input"
			        name="product-product_name" 
			        id="product-product_name" 
			        type ="text" value="$o->product_name" 
			        placeholder="Enter the Product Name"> 
		    </div>
		    	<div class="form control">
		       <label class="form-label" for="product-price">Price</label>
			    <input class="form-input"
			       name="product-price" 
			        id="product-price" 
			        type ="Number" 
			        min="0"
			        max="1000"
			        step="0.01"
			        value="$o->price" 
			        placeholder="Enter the Price "> 
		    </di>
		       <div class="form control">
		       <label class="form-label" for="product-quantity">Quantity</label>
			    <input class="form-input" name ="product-quantity" id="product-quantity" 
			        type ="Number" 
			        min="0"
			        max="1000"
			        step="1 "
			        value="$o->quantity" 
			        placeholder="Enter the Quantity "> 
		    </div>
		    <div class="form control">
		         <label class="form-label" for="product-category">Category</label>
			     <input 
			       class="form-input "
			        name="product-category" 
			        id="product-category " 
			        type ="text" value="$o->category " 
			        placeholder="Enter the category Title"> 
		    </div>
		       <div class="form control">
		         <label class="form-label" for="product-description">Description</label>
			     <textarea
			       class="form-input "
			        name="product-description" 
			        id="product-description " 
			        placeholder="Enter Product description ">$o->description</textarea>
		    </div>
		    <div class="form-control">
			     <label class ="form-label"
			        for="product-thumbnail"> Thumbnail</label>
			        <input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the product Thumbnail">
		    </div>
		     <div class="form-control">
			     <label class ="form-label"
			        for="product-images"> Other Images</label>
			        <input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the product Images">
		    </div>

		  <div class="form">
		  <input class="form-button" type="submit" value="Save changes">
		  </div>
    </form>
HTML;

 $output = $id == "new" ? "<div class='card soft '> $form" :
		"<div class ='display-flex '> 
			<div class='col-xs-12 col-md-7' ><div class='card soft '>$display</div>
			</div> 
			<div class='col-xs-12 col-md-5' ><div class='card soft '>$form</div>
		
		</div>
		";

$delete = $id == "new" ? "" : "<a href= '{$_SERVER['PHP_SELF']}?$id=&action=delete'>Delete</a>";

echo <<<HTML
 <div class="card soft ">
 <nav class="display-flex">
	   <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
	    <div class="flex-none">$delete</div>
</nav>
</div>
$output 
HTML;
 }

   



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Product Admin Page  </title>


	<?php include "../parts/meta.php"; ?>
	 
 

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
				      <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
				      <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product </a></li>
 
				</ul>
			</nav>
		</div>
		</div>
	</header>

	<div class="container">

     		<?php 


     		if(isset($_GET['id'])) {

     		showProductPage(
     			$_GET['id']=="new" ?
     				$empty_product :
     				makeQuery(makeConn(), "SELECT * FROM `Products` WHERE `id`=".$_GET['id'])[0]
     		);
     	
	
     		//showProductPage();
     		
     		}else{

     		 ?>
			<h2>Product List</h2>
			<?php 	

			$result = makeQuery(makeConn(), "SELECT * FROM `Products`");

			echo array_reduce($result,'productListItem');
			?>


		<?php } ?>
 		
		

	</div>
</body>









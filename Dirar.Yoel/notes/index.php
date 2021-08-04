<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "<div> hello World</div>";

	echo"<div> Goodbye World</div>";

// Variables 
    $a = 5;


    echo $a;

// String INterpolation 

echo " <div>I have $a things </div>";

//Nunber 
//Integer
$b = 15;
// Float 
$b =0.576;

$b = 10; 

// String 
$name = "Yerguy2";

// Boolean 
$isOn = true; 

// Math 
//PEMDAS
echo (5-4) * 2; 

//Concatenation 
echo "<div>b+a" . "= c</div>";
echo "<div>$b + $a  =  ".($a+$b)."</div>";


?>

<hr> 
<div>This is my name </div>
<div>

<?php

$firstname = "Yoel";
$lastname = "Dirar";
$fullname = "$firstname $lastname";

echo $fullname;

?>
<hr>
<?php 

//Superglobal 
// ?name=Joey

	echo " <a href='?name=Yoel'>visit</a>";
	echo "<div>My name is {$_GET['name']} </div>";
// ?name=yoel&type=textarea
	


echo"<a href='?name=Yoel&type=textarea'>vist</a>";
echo "<{$_GET['type']}>My name is {$_GET['name']} </{$_GET['type']}>";


 ?>
<hr>
  <?php  
   
   // Array 
  $colors = array("red", "green", "blue");

  echo $colors[2];

  echo " 
  	<br>$colors[0]
    <br>$colors[1]
    <br>$colors[2]

  ";

echo count($colors);
  
  ?>

<div style ="color:<?= $colors[1]; ?>">
	This text is green 
</div>

<hr>
    <?php

    	// Associative Array 

    $colorAssociative = [

    	"red" => "#f00",
    	"green" => "#0f0",
    	"blue" => "#00f"

    ];

    	echo $colorAssociative['green'];
?>


	<hr>
	<?php 

	// Casting 

	$c = "$a";

	$d = $c *1;
     
    $colorsObject = (object) $colorAssociative;

    //echo $colorsObject;


echo "<hr";

// ARray Index Notation 

	echo $colors[0]."<br>";
	echo $colorAssociative['red']."<br>";
	echo $colorAssociative[$colors[0]]."<br>";

// OBJECT PRPERTY NOTATION 

	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0] }."<br>";

     ?>

     <hr> 

     <?php 

     print_r($colors);

     echo "<hr>";

     print_r($colorAssociative);

     echo "<hr>";

     echo "<pre>",print_r($colorAssociative),"</pre>";

     // FUNCTION 

     function print_p($v) {
     	echo "<pre>",print_r($v),"</pre>";

     }

     print_p($_GET);

     ?>


</body>
</html>
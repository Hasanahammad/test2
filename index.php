<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntex</title>
	<style>
		.phpcoding{
			width :900px;
			margin :0 auto ;
			background:#ddd;
			padding: 20px;
			min-height: 400px
		}
		.headeroption,
		.footer{
			background:#333;
			color:#fff;
			padding:  20px;
			text-align: center;
			text-transform:  uppercase;
		}
		.maincontent{
			min-height: 200px;
			text-align: center;
			font-size:  20px;
			text-transform:  uppercase;
			margin-top:  140px;
			}

		.headeroption h2, .footer h2{margin: 0;

		}
	</style>



</head>
<body>
	<div class="phpcoding">
	<section class="headeroption">

		<h2>php fundamental traning</h2>
		
	</section>
	<section class="maincontent">
		1. Arithmatic Operators
		2. Assignment Operators
		3. Comparison Operators
		4. Increment / Decrement Operators
		5. Logical Operators
		6. String Operators
		7. Array Operators


	<br/>
		<hr/>
		1. Arithmatic Operator
		<hr/>
		
		<?php
			$x = 5;
			$y = 2;
			echo $x+$y;

		?>

		<br/>
		<hr/>
		2. Assignment Operator
		<hr/>
		
		<?php
		$x = 10;
		$x +=20;
		echo $x;

		?>
		<br/>
		<hr/>
		3. Comparison Operator
		<hr/>
		
		<?php
		$x = 100;
		$y = "100";
		var_dump($x == $y);
		?>
		<br/>
		<hr/>
		4. Increment / Decrement Operator
		<hr/>
		
		<?php
		$x = 5;
		echo ++$x;
		echo "<br/>";
		echo $x++;
		?>
		<br/>
		<hr/>
		5. Logical Operators
		<hr/>
		
		<?php
		$x = 40;
		$y = 50;

		if ($x ==40 and $y == 50)
		{
			echo "Training with live project";
		}
		else
		{
			echo "wrong";
		}
		if ($x ==40 or $y == 40)
		{
			echo "<br/>","Training with live project";
		}
		else
		{
			echo "wrong";
		}


		if ($x ==40 xor $y == 50)
		{
			echo "<br/>","Training with live project";
		}
		else
		{
			echo "<br/>","wrong";
		}

		if ($x ==40 && $y == 50)
		{
			echo "<br/>","Training with live project";
		}
		else
		{
			echo "<br/>","wrong";
		}


		?>




		<br/>
		<hr/>
		6. String Operators
		<hr/>
		
		<?php
		$x = "training with";
		$y = " Live project";
		//$z = $x . $y;
		$x .= $y;
		echo $x;
		//echo $z;
		?>
		<br/>
		<hr/>
		7. Array Operators
		<hr/>		
		<?php
		$x = array("a" =>"Dhaka", "b" => "sylhet" );
		$y = array("c" => "Comilla","d" => "Rajsahi");
		var_dump($x+$y);
		?>

	</section>
	<section class="footer">
		<h2>www.trainging.com</h2>
		
	</section>
	</div> 
</body>
</html>
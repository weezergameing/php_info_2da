<html>
	<head>
		<title> Cadenas </title>
	</head>
	<body>
	<h1> Ejercicio 1 </h1>
		<?php
		$str1 = "el pepe ete sech";
		print ucfirst($str1);
		?>
	
	<h1> Ejercicio 2 </h1>
		<form action="cadenas.php" method="POST">
		<input type="text" name="str"> 
		<input type="submit" value="Enter">
	
		<?php
			$str2=@$_POST["str"];
			$str2=strtolower($str2);
			$str2=ucfirst($str2);
			
			print $str2;
		?>
		</form>
		
	<h1> Ejercicio 3 </h1>
		<form action="cadenas.php" method="POST">
		<input type="text" name="str_min_a"> 
		<input type="submit" value="Enter">
		<?php
			$str_min_a=@$_POST["str_min_a"];
			$str_min_a=str_replace('a','',$str_min_a);
			
			print $str_min_a;
		?>
		</form>
		
	<h1> Ejercicio 4 </h1>
		<form action="cadenas.php" method="POST">
		<label for="ins_name"> Inserte su nombre: </label>
		<input type="text" name="name" id="ins_name"> 
		<input type="submit" value="Enter">
		<?php
			$name=@$_POST["name"];
			$name=strrev($name);
			
			print $name;
		?>
		</form>
	
	<h1> Ejercicio 5 </h1>
		<form action="cadenas.php" method="POST">
		<label for="char_6"> Inserte una palabra no mayor a seis caracteres: </label>
		<input type="text" name="char_6" id="char_6" maxlength="6"> 
		<input type="submit" value="Enter">
		<?php
			$char_6=@$_POST["char_6"];
			$char_6=strtolower($char_6);
			$char_6[0]=ucwords($char_6[0]);
			$char_6[2]=ucwords($char_6[2]);
			$char_6[4]=ucwords($char_6[4]);
			
			print $char_6;
		?>
		</form>
		
		<!--<h1> Ejercicio 6 </h1>-->
		
	</body>
</html>
<html>

<head>
<title>
prueba2 
</title>
</head>

<body>
<form action="prueba2.php" method="POST">
<p>Ingrese el precio 1:</p>
<input type="text" name="precio1">
<p>Ingrese el precio 2:</p>
<input type="text" name="precio2">
<p>Ingrese el precio 3:</p>
<input type="text" name="precio3">
<input type="submit" value="calcular">
</form>
<?php
$precio1 = $_POST["precio1"];
$precio2 = $_POST["precio2"];
$precio3 = $_POST["precio3"];
echo "el precio medio es " ;
echo ($precio1 + $precio2 + $precio3) / 3 ;
?>
</body>
</html>
<html>

<head>
<title>
prueba  
</title>
</head>

<body>
<form action="prueba.php" method="POST">
<p>Ingrese la altura y el diametro en metros:</p>
<input type="text" name="altura">
<input type="text" name="diametro">
<input type="submit" value="calcular">
</form>
<?php
$altura = $_POST["altura"];
$dos = 2 ;
$pi= 3.141593 ;
$diametro = $_POST["diametro"];

echo "el volumen del cilindro es " ;
echo $pi* ($diametro/2)**2*$altura;

?>
</body>
</html>
<html>
<head>
<title> </title>
</head>
<body>
<form action="MauricioPhpEjercicio2.php" method="POST">
<label>Introduzca su nombre</label>
<br>
<input type="text" name="name">
<br>
<input type="radio" name="r" value="activo">
<br>
<input type="checkbox" name="food" value="si">
<br>
<input type="submit" value="print">
<?php
$name = $_POST["name"];
$radio = $_POST["r"];
$check = $_POST["food"];
echo "Su nombre es: ".$name;
echo "<br>";
echo $radio;
echo "<br>";
echo "Te gusta comer: ".$check;
?>
</body>
</html>
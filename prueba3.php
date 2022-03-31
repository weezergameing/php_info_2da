<html>
<head>
<title></title>
</head>
<body>
<form action="prueba3.php" method="GET">
    <p>Ingrese su nombre</php><br>
    <input type="test" name="nombre">
    <br>
    <input type="radio" name="r" value="radiosss"> Seleccione
    <br>
    <input type="checkbox" name="comer" value="comida">Comer
    <br>
    <select name="color">
        <option>blanco</option>
        <option>azul</option>
        <option>bordo</option>
</select>
    <input type="submit" value="Imprimir"> <br>
<?php
$nom=$_GET["nombre"];
$radio=$_GET["r"];
$casilla=$_GET["comer"];
$lista=$_GET["color"];
echo "<br>";
echo "hola". $nom;
echo "<br>";
echo $radio;
echo $casilla;
echo "<br>";
echo $lista
?>
</body>
</html>
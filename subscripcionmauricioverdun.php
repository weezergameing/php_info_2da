<html>
<head>
<title> </title>
</head>
<body>
<form action="subscripcionmauricioverdun.php" method="POST">
<h1> Subscripción electrónica a nuestro boletín.</h1>
<label>Nombre: </label>
<input type="text" name="name">
<label>Apellido: </label>
<input type="text" name="surname">
<label>E-mail: </label>
<input type="text" name="mail">
<br>
<label>Género: </label>
<input type="radio" id="Hombre" name="gender" value="Hombre">
<label for="Hombre"> Hombre </label>
<input type="radio" id="Mujer" name="gender" value="Mujer">
<label for="Mujer"> Mujer </label>
<input type="radio" id="None" name="gender" value="Indefinido">
<label for="None"> Prefiero no decirlo </label>
<br>
<label>Nivel de estudios: </label>
<input type="radio" id="ce" name="education">
<label for="ce"> Certificado escolar </label>
<input type="radio" id="eso" name="education">
<label for="eso"> Graduado en E.S.O </label>
<input type="radio" id="bachiller" name="education">
<label for="bachiller"> Bachiller - Formación Profesional </label>
<input type="radio" id="di" name="education">
<label for="di"> Diplomado</label>
<input type="radio" id="li_do" name="education">
<label for="li_do"> Licenciado o Doctorado </label>
<br>
<label> Interesado en los siguientes temas: </label>
<input type="checkbox" name="Musica">
<label for=""> </label>
<input type="checkbox" name="Deportes">
<label for=""> </label>
<input type="checkbox" name="Cine">
<label for=""> </label>
<input type="checkbox" name="Libros">
<label for=""> </label>
<input type="submit" value="Ciencia">
<br>
<label> Día de la semana en que desea recibirlo </label>
<select name="day">
<option>Domingo</option>
<option>Lunes</option>
<option>Martes</option>
<option>Miércoles</option>
<option>Jueves</option>
<option>Viernes</option>
<option>Sábado</option>
</select>
<input type="submit" value="Comprobar formulario">
<input type="clear" value="Borrar todo">
</body>
</html>
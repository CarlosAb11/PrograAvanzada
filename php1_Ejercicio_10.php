<html>
<head>
<title>Ejercicio 10
</title>

</head>

<body>

<P> <h1>Ejercicio con PHP</h1> </p>

<form action="form.php" method="post">
<p>Nombre: <input type="text" name="nombre" /></p>:

<textarea name="textArea" rows="3" cols="9" wrap="soft"> Digite las lineas aqui</textarea> <br/> <br/>

Selccione un personaje: <select name="Heroe">

<option> Iron man</option>

<option> Thor</option>

<option> Hawk Eye</option>

</select> <br> <br>


 Instrumentos preferidos:<br>

    <label><input type="checkbox" name="guitarra" value="Guitarra">Guitarra </label><br>

    <label><input type="checkbox" name="guitarra" value="Bateria" checked> Bateria </label><br>

    <label><input type="checkbox" name="guitarra" value="Piano">Piano </label> <br> <br>

Mejor Jugador:<br>

<input type="radio" name="Messi" value="Messi">Messi <br>

<input type="radio" name="Messi" value="Ronaldo"checked> Ronaldo <br>

<input type="radio" name="Messi" value="Hazard">Hazard <br> <br>


Seleccione un rango de edad:<br>

Rango de edad: <input type="range" name="edad" min="0" max="100" step="10">


<p><input type="submit" value="Enviar" /> </p>
</form>





</body>
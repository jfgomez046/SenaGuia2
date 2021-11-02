<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
     <header>
        <div class="contenedor">
            <nav class="menu">
               <center><a href="index.html">inicio</a></center>                        
            </nav>
          </div>
      </header>
<body>
        <form action="enviar.php" method="post"> 
    	<h1>Registrate</h1>
    	<input type="text" name="documento" placeholder="documento">
    	<input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellido" placeholder="apellido">
        <input type="text" name="edad" placeholder="edad">
        <input type="text" name="telefono" placeholder="telefono">
        <input type="text" name="tipo_sangre" placeholder="tipo_sangre">
        <input type="text" name="direccion" placeholder="direccion">
    	<input type="submit" name="register">
    </form>
    
</body>
</html>
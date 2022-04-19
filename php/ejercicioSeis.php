<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Formulario</title>
   </head>
   <body>
      <a href="../index.php" title="Volver">
      <img alt="Imagen Volver" src="../img/volver.png" width="60" height="40" align= "right"  />
      </a>
      <h1>Formulario de Registro</h1>

      
      <form action="ejercicioSeisB.php" method="post">
         <p>Nombre: <input type="text" name="nombre" maxlength="20" size="20" value="" required/></p>
         <p>Apellido: <input type="text" name="apellido" maxlength="20" size="20" value="" required/></p>
         <p>DNI: <input type="number" name="dni" maxlength="11" size="11" value="" required/></p>
         <p>Email: <input type="email" name="email" maxlength="30" size="30" value="" required/></p>
         <p>Sexo --> 
         <label for="hombre">Hombre</label>
         <input type="radio" name="sexo" id="hombre" required>
		<label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer" required>
		<label for="otro">Otro</label>
		<input type="radio" name="sexo" id="otro" required></p>
         <p>Calle: <input type="text" name="calle" maxlength="20" size="20" value="" required/></p>
         <p>Número: <input type="number" name="numero" maxlength="20" size="20" value="" required/></p>
         <p>Torre: <input type="text" name="torre" maxlength="10" size="10" value="" /></p>
         <p>Piso: <input type="number" name="piso" maxlength="2" size="2" value="" /></p>
         <p>Departamento: <input type="text" name="departamento" maxlength="10" size="10" value="" /></p>
         <p>País: <input type="text" name="pais" size="20" value="" required/></p>
         <p>Provincia: <input type="text" name="provincia" maxlength="20" size="20" value="" required/></p>
         <p>Localidad: <input type="text" name="localidad" maxlength="20" size="20" value="" required/></p>
         <p>Edad: <input type="text" name="edad" maxlength="20" size="20" value="" required/></p>
         <p>Estado Civil: <select name="estadocivil" id="inputEstadoCivil">
            <option value="0">Soltero</option>
            <option value="1">Casado</option>
            <option value="2">Separado</option>
            <option value="3">Divorciado</option>
            <option value="4">Viúvo</option>
			</select></p>
         <p>Hijos cantidad: <input type="number" name="hijos" maxlength="2" size="2" value=""/></p>
         <p> <fieldset>
            <legend>Hobbies</legend>
            <input type="checkbox" name="hobby" value="sports" id="sport">
            <label for="sport">Sports</label>
            <input type="checkbox" name="hobby" value="music" id="music">
            <label for="music">Music</label>
            <input type="checkbox" name="hobby" value="reading" id="read">
            <label for="read">Reading</label>
        </fieldset></p>
        
         <p><input type="submit" value="Enviar y ver datos con php" /></p>
      </form>   
   </body>
</html>
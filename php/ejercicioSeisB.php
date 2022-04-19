<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Formulario</title>
   </head>
   <body>
      <a href="ejercicioSeis.php" title="Volver">
      <img alt="Imagen Volver" src="../img/volver.png" width="60" height="40" align= "right"  />
      </a>
      <h1>Datos cargados en Formulario</h1>

          <?php 
	    /* Tuve que agregar este if con el isset, si no, me daba un Notice de Undefined Index num fferrero 18/04/2022*/
         if (isset($_POST['nombre'])){ 
	  echo "Nombre: ".$_POST['nombre']."<br>";
	  echo "Apellido: ".$_POST['apellido']."<br>";
	  echo "DNI: ".$_POST['dni']."<br>";
	  echo "Email: ".$_POST['email']."<br>";
	  echo "Sexo: ".$_POST['sexo']."<br>";
	  echo "Calle: ".$_POST['calle']."<br>";
  	  echo "Número: ".$_POST['numero']."<br>";
	  echo "Torre: ".$_POST['torre']."<br>";
	  echo "Piso: ".$_POST['piso']."<br>";
	  echo "Departamento: ".$_POST['departamento']."<br>";
	  echo "Pais: ".$_POST['pais']."<br>";
	  echo "Provincia: ".$_POST['provincia']."<br>";
	  echo "Localidad: ".$_POST['localidad']."<br>";
	  echo "Edad: ".$_POST['edad']."<br>";
	  echo "Estado Civil: ".$_POST['estadocivil']."<br>";
	  echo "Hijos cantidad: ".$_POST['hijos']."<br>";
	  echo "Hobbies: ".$_POST['hobby']."<br>";
	  }
	   ?>  
   </body>
</html>
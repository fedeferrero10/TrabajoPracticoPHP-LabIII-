<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0079)https://uniwebsidad.com/static/libros/ejercicios/css/comun/pagina_completa.html -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Ejercicio 3 Fechas</title>
</head>
<body>
  <a href="../index.php" title="Volver">
	<img alt="Imagen Volver" src="../img/volver.png" width="60" height="40" align= "right"  />
</a>
<h1> Formatos de Fechas</h1>
<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

/*Martes 19 de Abril de 2022*/
$diassemana = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $diassemana[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y').' --> Se utilizan arreglos con los días de la semana y los Meses en español' ;
echo "<br>";
/*19/04/22*/
$fecha=date('d/m/y');
echo $fecha.' --> Dia, Mes y Año --> (d/m/y)';
echo "<br>";

/*Mar 19 12:57 AM */
$diassemana = array("Dom","Lun","Mar","Mie","Jue","Vie","Sáb");
echo $diassemana[date('w')]." ".date('d')." ".date('h:i A',strtotime(date('H:i'))).' --> Se utilizan un arreglo con los días de la semana abreviados  en español y una funcion strtotime para que tome el horario de 1 a 12 y la funcion A para agregar si es PM o AM' ;

echo "<br>";
$semana = date('W');
echo "Semana: $semana";

//=> Semana: 05


?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="../css/estiloEjercicioDos.css" media="screen" />
      <title>Tabla de Multiplicar</title>
   </head>
   <body>
      <a href="../index.php" title="Volver">
      <img alt="Imagen Volver" src="../img/volver.png" width="60" height="40" align= "right"  />
      </a>
      <h1>Tablas de multiplicar</h1>
      <h3>Ingrese un número del 1 al 10 para obtener la tabla de multiplicación</h3>
      <form action="#" method="post">
         <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" value="" /></p>
         <p><input type="submit" value="Ver multiplicación" /></p>
      </form>
      <?php 
	   /* Tuve que agregar este if con el isset, si no, me daba un Notice de Undefined Index num fferrero 18/04/2022*/
         if (isset($_POST['num'])){ 
			 $n=$_POST['num']; 
			 if ($n<1 or $n>10) {
				 echo "Debe ingresar un número entre el 1 y el 10.";
				 }
			 else {
              ?>
      <table summary="Tabla Titulo">
         <thead>
            <tr>
               <th scope="col"> <?php  echo "<h4>Tabla del $n</h4>";?></th>
            </tr>
         </thead>
      </table>
      <table summary="Tabla de multiplicacion">
         <?php
            $i=1;
            while ($i<=10) {
            ?>	
         <thead>
            <tr>
               <th scope="col"> <?php echo "$n x $i"?></th>
               <th scope="col" ><?php echo $n*$i?></th>
            </tr>
         </thead>
         <?php 
            $i++;
            } 
            }
            ?>
         <thead>
            <tr>
               <th scope="col"> Multiplicación</th>
               <th scope="col" >Resultado</th>
               <?php 
                  }
                  ?>
            </tr>
         </thead>
      </table>
   </body>
</html>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="../css/estiloEjercicioDos.css" media="screen" />
      <title>Multiplicación de dos números</title>
   </head>
   <body>
      <a href="../index.php" title="Volver">
      <img alt="Imagen Volver" src="../img/volver.png" width="60" height="40" align= "right"  />
      </a>
      <h1>Multiplicación de dos números y cantidad de veces a realizar la multiplicación</h1>
      <form action="#" method="post">
         <p>Ingrese un número a multiplicar: <input type="text" name="num" maxlength="2" size="2" value="" /></p>
         <p>Ingrese otro número a multiplicar: <input type="text" name="num2" maxlength="2" size="2" value="" /></p>
         <p>A partir de los números ingresados, indique la cantidad de multiplicaciones que se desea realizar: <input type="text" name="cant" maxlength="2" size="2" value="" /></p>
         <p><input type="submit" value="Ver multiplicación" /></p>
      </form>
      <?php 
	   /* Tuve que agregar este if con el isset, si no, me daba un Notice de Undefined Index num fferrero 18/04/2022*/
         if (isset($_POST['num'])){ 
			 $n=$_POST['num']; 
			 $n2=$_POST['num2']; 
			 $cant=$_POST['cant']; 
			 $cant = $cant +  $n2;/*Esto lo hago para poder obtener la multiplicación a partir de n2 la cantidad de veces que quiera fferrero 19/04/2022*/
			  if ($n<1 or $n2<1 or $cant<1) {
				 echo "Debe ingresar datos en los 3 campos para poder obtener la multiplicación";
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
            $i=$n2;
            while ($i<$cant) {
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
            ?>
         <thead>
            <tr>
               <th scope="col"> Multiplicación</th>
               <th scope="col" >Resultado</th>
            </tr>
         </thead>
		 <?php 
		  }
		  }
            ?>
      </table>
   </body>
</html>
 
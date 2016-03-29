

<h1>llego</h1>

<?php 
	echo " POST:";
	 var_dump($_POST);
	echo "<br>"; 
	echo " GET:";
	var_dump($_GET);

	echo "<br>"; 
	echo "<br>"; 
			echo "<br>"; 

	$nombre =  $_POST ['usuario'];
	$clave =  $_POST ['clave'];
	
	if($nombre=='admin' &&  $clave=='1234'){
		include "bienvenido.html";
		//echo "bienvenido"; 
	}else{
		include "nologueado.html";
	}



 ?>


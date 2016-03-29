<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="numero1">
		<br>
		<input type="text" name="numero2">
		<br>
		<input type="text" name="numero3">
		<br>
		<input type="submit" name="btn_mayor"  value="mayor">
		<input type="submit" name="btn_sumador" value="sumador">
	</form>

	<?php 

	//var_dump($_POST);

		if (isset($_POST["btn_mayor"])){
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$numero3 = $_POST["numero3"];

			if($numero1 > $numero2 && $numero1 > $numero3){
				echo "el mayor es el numero: ".$numero1;
			}

			if($numero3 > $numero2 && $numero3 > $numero1){
				echo "el mayor es el numero: ".$numero3;
			}

			if($numero2 > $numero1 && $numero2 > $numero3){
				echo "el mayor es el numero: ".$numero2;
			}
		
			if($numero2 == $numero1 && $numero2 == $numero3){
				echo "Los 3 numeros son iguales.";
			}
		}

		if (isset($_POST["btn_sumador"])){
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$numero3 = $_POST["numero3"];
			$sumador = $numero2 + $numero1 + $numero3;
			echo "La suma de los numeros es: ".$sumador ;
		}
	 ?>

</body>
</html>



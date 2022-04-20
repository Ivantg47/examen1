<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style>

		.col-1{
			float: left;
			width: 18%;
			padding: 10px;
			
			
		}
		.col-2{
			float: left;
			width: 9%;
			padding: 10px;
			
		}
		.col-3{
			float: left;
			width: 100%;
			padding: 20px;
			
			border: 1px solid #bab9b9;
		}

		.row {
		 	margin-left:-15px;
		 	margin-right:-15px;
		 	background: #dad5d4;
		}
		.row:before,
		.row:after {
		 	content:" ";
		 	display:table
		}
		.row:after {
		 	clear:both
		}
		@media screen and (max-width: 200px) {
			.col-1{
				width:100% 
			},
			.col-2{
				width:100%
			}
			.col-3{
				width:100%
			}
		}
		
		
	</style>
	
	<?php
		if(isset($_GET)){
			if($_GET['error']==1){
				echo "Favor de ingresar un valor valido";
			}

			if(is_numeric($_GET['imperial'])){

				$imperial = $_GET['imperial'];
				$medidaI = $_GET['medidaI'];
				$metrico = $_GET["metrico"];
				$medidaM = $_GET['medidaM'];
			} 
		}else {

			$imperial = 0;
			$medidaI = 'oz';
			$metrico = 0;
			$medidaM = 'm';

		}
	?>

	<body>
		
		<div class="row">
			<div class="col-3" align="center">
				<h3>Ingrese el valor a convertir:</h3>
			</div>
			<form name="convertir" action="converter.php" method="post">
				<div class="col-1">
					<label for="metrica">Cantidad:</label>
					<br />
					<input type="text" name="metrico" value="<?= $metrico ?>">
				</div>
				<div class="col-1">
					<label for="medidaM">Tipo de unidad:</label>
					<br />
					<select id="mD" name="medidaM">
						<option value="ml">Mililitro a Onza</option>
						<option value="m">Metro a Yarda</option>
						<option value="gr">Gramo a Libra</option>
						<option value="c">°C a °F</option>
						<option value="km">Kilometro a Milla</option>
						<option value="peso">Peso $ a Libra £</option>
					</select>
				</div>
				
				<div class="col-2"></div>
				<div class="col-1">
					<label for="ingles">Resultado:</label>
					<br />
					<input type="text" name="imperial" value="<?= $imperial ?>" readonly>
				</div>
				<div class="col-3" align="center">
					<input type="submit" name="enviar" value="Convertir">
				</div>
			</form>
		</div>
		
		<a href="index.php">Indice</a>
		<a href="creditos.php">Creditos</a>
	</body>
</html>


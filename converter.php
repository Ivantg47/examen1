<?php 


	$metrico = strip_tags($_POST["metrico"]);
	$medidaM = strip_tags($_POST["medidaM"]);

	if ((is_numeric($metrico) && $metrico >=0) || (is_numeric($metrico) && $medidaM == 'c')) {

		switch ($medidaM){
			case 'ml':
				$imperial = $metrico / 29.574;
				break;
			case 'm':
				$imperial = $metrico * 1.094;
				break;
			case 'gr':
				$imperial = $metrico / 28.35;
				break;
			case 'c':
				$imperial = (($metrico * (9 / 5)) + 32);
				break;
			case 'km':
				$imperial = $metrico / 1.609;
				break;
			case 'peso':
				$imperial = $metrico / 26.16;
				break;
		}
		header('Location: formulario.php?metrico='.$metrico.'&imperial='.$imperial);
	}else{
		header('Location: formulario.php?error=1');
	}
 ?>

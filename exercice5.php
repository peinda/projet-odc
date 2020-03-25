<!DOCTYPE html>
<html>
<head>
	<title> Exo 5</title>
	<meta charset="utf-8">
</head>
<body>
<h1> <u>EXERCICE 5 </u></h1>
<fieldset>

	<form method="POST">		
		Ecrivez un ensemble de numéro <br/> <br/>
		<textarea name="num"  style="width: 600px; height: 100px;"> </textarea>   <br/> <br/>
		<input type="submit" name="Valider" value="Valider"> <br/> <br/>
	</form>
    </fieldset>
	<?php 

if (!empty($_POST['num'])){

	$donnees = $_POST['num'];
	$j=0; $k=0; $l=0;
	$tab = array('orange' => array(), 
				 'free' => array(), 
				 'expresso' => array(),
				 'invalide' => array() );
	$t = array();
	$t = preg_split('#[\s,]+#', $donnees);
	for ($i=0; $i < count($t) ; $i++) { 
		
		if (preg_match('/^77[0-9]{7}/', $t[$i]) or preg_match('/^78[0-9]{7}/', $t[$i]) ) {
			
			$tab['orange'][] = $t[$i];
		}
else{

			if (preg_match('/^76[0-9]{7}/', $t[$i])) {
			
			$tab['free'][] = $t[$i];		

			}

			else{

				if (preg_match('/^70[0-9]{7}/', $t[$i])) {
			
				$tab['expresso'][] = $t[$i];
		

				}

				else{
					$tab['invalide'][] = $t[$i];

				}
			}

		}


	}
	print_r($tab);

	$numTotal = count($tab['orange']) + count($tab['free']) + count($tab['expresso']) + count($tab['invalide']);
?>

<br/> <br/>	

<?php
$pO = count($tab['orange']) * 100 /$numTotal;
$pF = count($tab['free']) * 100 /$numTotal;
$pE = count($tab['expresso']) * 100 /$numTotal;
$pI = count($tab['invalide']) * 100 /$numTotal;

echo 'Le pourcentage des numéros d\'orange est: ' .$pO. '% <br/>';
echo 'Le pourcentage des numéros de free est: ' .$pF. '% <br/>';
echo 'Le pourcentage des numéros d\'expresso est: ' .$pE. '% <br/>';
echo 'Le pourcentage des numéros invalides est: ' .$pI. '% <br/>';
}
?>
  
</body>
</html>
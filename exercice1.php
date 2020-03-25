<?php
session_start();
		if (isset($_POST['n']) && is_numeric($_POST['n'])){
			if(preg_match('/^[0-9]*$/', $_POST['n'])){

			$T = array();
			if (!empty($_POST)){
				$n = $_POST['n'];
				$k=0;
				$s=0;
		if(($_POST['n']>10)){
		for ($i=2; $i <=$n ; $i++) {
				$j=2;
			while (($i%$j)!=0){
					$j=$j+1;
			}
			if($i==$j) {
				$T[]=$i;
			}
		}
		function moyenne($tab){
			$moyenne=0;
			for ($i=0; $i < count($tab); $i++) {
				$moyenne+=$tab[$i];
			}
			return $moyenne/count($tab);
		}
		//declarer moyenne en tant que variable session pour l'affichage dans les autres pages
		$_SESSION['moy'] = moyenne($T);

		   $tab=array("inferieur"=>array(), "superieur"=>array());

		   for ($i=0; $i < count($T); $i++) {
			   if ($T[$i]<$_SESSION['moy']){
				// Affecter des valeurs au clé inferieure
				 $tab["inferieur"][]=$T[$i];
				}
				else{
					// Affecter des valeurs au clé superieure
					$tab["superieur"][]=$T[$i];
				}
				}
				//affectation du tableau $tab à $_SESSION['tab'] pour que le tableau soit visible dans les autres pages
				$_SESSION['tab'] = $tab;
		}

		else{
			echo "saisie incorrecte";
		}
		}
		}
	}
	?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>exo1</title>
</head>
<center>
<body BGCOLOR="green" >
	<h1> <u>EXERCICE 1 </u></h1>
<form method="post" >
	Entrez une valeur
	<input placeholder="saisir n" type="texte" name="n" size="12" required ><br><br>
    <input type="submit" value="Validez" style="margin-left:50px;"><br><br>
</form>
<?php
	echo "la moyenne = ".$_SESSION['moy'];
	//affichage des tableaux si le tableau $_SESSION['tab'] existe
	if(isset($_SESSION['tab'])){
		echo"<p><h1>Les nombres prémiers inferieurs à la moyenne sont:</h1></p> ";
		$taille_tableau=count($_SESSION['tab']['inferieur']);
		$nombre_max_page=100;
		$page_left_right=5;
		$nombre_page= $taille_tableau/$nombre_max_page;
		$dernier_page=ceil($taille_tableau/$nombre_max_page);

		if (isset($_GET['page'])) {
			$page=$_GET['page'];
		}
		else{
			$page=1;
		}
		if($page<1){
			$page=1;
		}
		elseif($page>$dernier_page){
			$page=$dernier_page;
		}
		echo"<table border=1 bgcolor=pink width=60% height=500px id='left'><tr>";
		for ($i=($page-1)*$nombre_max_page; $i<($page*$nombre_max_page) ; $i++){

			if($i>$taille_tableau){
			break;
			}
			else{
				if (($i!=(($page-1)*$nombre_max_page)) && ($i%10==0)) {

					echo"</tr> <br/> ";
				}
				if (array_key_exists($i,$_SESSION['tab']['inferieur'])) {
					# code...
				
				echo"<td>".$_SESSION['tab']['inferieur'][$i]."</td>";
			}
			}
		}
		echo"</tr> </table> <div class=pagination>";
		$pagination="";
		if($dernier_page>1){
		   if ($page>1) {
			   # code...
			   $precedent=$page-1;
			   $pagination.="<a href='exercice1.php?page=$precedent' id='pg'>Precedent</a>";
				for($i=$page-$page_left_right; $i<$page;$i++){
					if($i>0){
						$pagination.="<a href='exercice1.php?page=".$i."'>".$i."</a>";
					}
				}
		   }
		   $pagination.="<span>".$page."</span>";
		   for($i=$page+1; $i<$dernier_page; $i++){
			$pagination.="<a href='exercice1.php?page=".$i."'>".$i."</a>";
			if($i>=$page+$page_left_right){
			break;
			}
		   }
		   if($page!=$dernier_page){
			   $suivant=$page+1;
			   $pagination.="<a href='exercice1.php?page=$suivant' id='pg'>Suivant</a>";
		   }
		}
		echo $pagination;
		echo "</div>";

		echo"<p><h1>Les nombres prémiers supérieur à la moyenne sont:</h1></p> ";
		if(isset($_SESSION['tab']['superieur'])){
			$taille_tableau=count($_SESSION['tab']['superieur']);
			$nombre_max_page=100;
			$page_left_right=5;
			$nombre_page= $taille_tableau/$nombre_max_page;
			$dernier_page=ceil($taille_tableau/$nombre_max_page);


			if (isset($_GET['page'])) {
				# code...
				$page=$_GET['page'];
			}
			else{
				$page=1;
			}
			if($page<1){
				$page=1;
			}
			elseif($page>$dernier_page){
				$page=$dernier_page;
			}
			echo"<table border=1 bgcolor=silver width=60% height=500px id='left'><tr>";
			for ($i=($page-1)*$nombre_max_page; $i<($page*$nombre_max_page) ; $i++){
				# code...
				if($i>$taille_tableau){
				break;
				}
				else{
					if (($i!=(($page-1)*$nombre_max_page)) && ($i%10==0)) {
						# code...
						echo"</tr> <br/> ";
					}if (array_key_exists($i,$_SESSION['tab']['superieur'])) {
						# code...
					
					echo"<td>".$_SESSION['tab']['superieur'][$i]."</td>";
				}
			}
			}
			echo"</tr> </table> <div class=pagination>";
			$pagination="";
			if($dernier_page>1){
			   if ($page>1) {
				   # code...
				   $precedent=$page-1;
				   $pagination.="<a href='exercice1.php?page=".$precedent." id=pg'>Precedent</a>";
					for($i=$page-$page_left_right; $i<$page;$i++){
						if($i>0){
							$pagination.="<a href='exercice1.php?page=".$i."'>".$i."</a>";
						}
					}
			   }
			   $pagination.="<span>".$page."</span>";
			   for($i=$page+1; $i<$dernier_page; $i++){
				$pagination.="<a href='exercice1.php?page=".$i."'>".$i."</a>";
				if($i>=$page+$page_left_right){
				break;
				}
			   }
			   if($page!=$dernier_page){
				   $suivant=$page+1;
				   $pagination.="<a href='exercice1.php?page=".$suivant." id=pg'>Suivant</a>";
			   }
			}
			echo $pagination;
			echo "</div>";
		}
	}
?>
</center>
</body>
</html>

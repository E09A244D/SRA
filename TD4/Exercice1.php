<!DOCTYPE html
   PUBLIC "-//W3C//DTD XHTML 1.0 Strict//fr"
   "http://www.w3.org/TR/xhtml1/dtd/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" dir="ltr" lang="fr">
<head>
	<style></style>
</head>
<body>

	<form action="Exercice1.php" method="POST" id="tarif">
		<select name="type">
			<option value="normale" >Tarif normal</option>
			<option value="reduit">Moins de 18 ou +65 ans</option>
			<option value="etudiant" >Etudiant</option>
		</select>
		<select name="jour">
			<option value="Lundi">Lundi</option>
			<option value="Mardi">Mardi</option>
			<option value="Mercredi">Mercredi</option>
			<option value="Jeudi">Jeudi</option>
			<option value="Vendredi">Vendredi</option>
			<option value="Samedi">Samedi</option>
			<option value="Dimanche">Dimanche</option>
		</select>
		<input type="submit" value="tarif!"/>
	</form>
	<?php 
	if (isset($_POST["jour"])){echo $_POST["jour"]." ";}
	//echo $_POST['tarif'];
	if (isset($_POST["type"])){echo $_POST["type"];}
	if (isset($_POST["type"])){
		if (isset($_POST["jour"]) && $_POST["jour"]=="Mercredi" ){
			echo"<div>Tarif: 6.50 Euros</div>";
		}
		else {
			if (isset($_POST["type"]) && $_POST["type"]=="normale"){
				echo"<div>Tarif: 9 Euros</div>";
			}
			else{
				if (isset($_POST["type"]) && $_POST["type"]=="etudiant"){
					echo"<div>Tarif: 6.50 Euros</div>";
				}
				else if (isset($_POST["type"]) && $_POST["type"]=="reduit" && ($_POST["jour"]=="Samedi" || $_POST["jour"]="Dimanche") ){
					echo"<div>Tarif: 9 Euros</div>";
				}
				else{
					echo"<div>Tarif: 6.50 Euros</div>";
				}
			}
		}
	}
	?>
</body>
</html>

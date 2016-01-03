<!DOCTYPE html
   PUBLIC "-//W3C//DTD XHTML 1.0 Strict//fr"
   "http://www.w3.org/TR/xhtml1/dtd/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" dir="ltr" lang="fr">
<head>
</head>
<body>
	<?php 
		$villes = array();
		$villes["Angers"]= array("Brest"=>381,"Dijon"=>564,"Lille"=>517);
		$villes["Brest"]= array("Angers"=>381,"Dijon"=>865,"Lille"=>728);
		$villes["Dijon"]= array("Angers"=>564,"Brest"=>865,"Lille"=>504);
		$villes["Lille"]= array("Angers"=>517,"Brest"=>728,"Dijon"=>504);
	?>
	<?php 
	echo "<table>";
		foreach ($villes as $a=>$b){
			echo "<tr><td>";
			echo $a;
			echo "</td>";
			foreach ($b as $d){
				echo "<td>";
				if ($a==$d){echo "0";} else{echo $d;}
				echo "</td>";
			}
		}
		echo "</table>";
	?>
	<form action="Exercice2.php" method="POST">
		<div>Entrez la première ville</div>
		<input type="text" value="" name="ville1"/>
		<div>Entrez la deuxième ville</div>
		<input type="text" value="" name="ville2"/>
		<input type="submit" value="YO"/>
	</form>
	<?php 
		if (isset($_POST['ville1']) && isset($_POST['ville2'])){
			$ville1=$_POST['ville1'];
			$ville2=$_POST['ville2'];
			if ((array_key_exists($ville1, $villes)) && (array_key_exists($ville2, $villes))){
				echo $villes[$ville1][$ville2];
			}
			else{
				echo "ERREUR";
			}
		}
	
	?>
</body>
</html>

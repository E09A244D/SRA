<?php
$entree=array("sdc"=>array("prix"=>3,"nom"=>"Salade de crevettes"),"terrine"=>array("prix"=>4,"nom"=>"Terrine du jour"), "tarte"=>array("prix"=>4.5,"nom"=>"Tarte du jour"));
$plat=array("wok"=>array("prix"=>10,"nom"=>"Wok au Poulet"),"steak"=>array("prix"=>8,"nom"=>"Steak Frites"), "poisson"=>array("prix"=>7,"nom"=>"Poisson du jour"));
$dessert=array("dame"=>array("prix"=>3,"nom"=>"Dame Blanche"),"creme"=>array("prix"=>3,"nom"=>"Creme Brulée"), "tarte"=>array("prix"=>2,"nom"=>"Tarte de Saison"));
$boisson=array("vin"=>3,"eau"=>1,"soda"=>2);


if (isset($_POST['entree'])){
	if (($_POST['entree'] == 1) && (isset($_POST['choixEntree']))){
		echo $entree[$_POST['choixEntree']]['nom']." : ".$entree[$_POST['choixEntree']]['prix']." Euros<br/>";
	}
}
if ((isset($_POST['choixPlat']))){
		echo $plat[$_POST['choixPlat']]['nom']." : ".$plat[$_POST['choixPlat']]['prix']." Euros<br/>";
}
if (isset($_POST['dessert'])){
	if (($_POST['dessert'] == 1) && (isset($_POST['choixDessert']))){
		echo $dessert[$_POST['choixDessert']]['nom']." : ".$dessert[$_POST['choixDessert']]['prix']." Euros<br/>";
	}
}
if (isset($_POST['boisson'])){
	if (($_POST['boisson'] == 1) && (isset($_POST['choixBoisson']))){
		echo $_POST['choixBoisson'].$boisson[$_POST['choixBoisson']]." : ".$boisson[$_POST['choixBoisson']]['prix']." Euros<br/>";
	}
}


?>

<option value="wok">Wok au poulet</option>
			<option value="steak">Steak Frite</option>
			<option value="poisson">Poisson du jour</option>
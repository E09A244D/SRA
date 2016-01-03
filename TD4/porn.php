<!DOCTYPE html
   PUBLIC "-//W3C//DTD XHTML 1.0 Strict//fr"
   "http://www.w3.org/TR/xhtml1/dtd/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" dir="ltr" lang="fr">
<head>
</head>
<body>
<h1>Restaurant</h1>
<h2>Ce site blabla</h2>
<div>Pour connaitre blablabla</div>
<hr>
<form action="calcul.php" method="POST">
	<div>
		Souhaitez-vous prendre une entrée ?
		<input type="radio" value="1" name="entree" /> Oui
		<input type="radio" value="0" name="entree" /> Non<br/>
		Si oui, quelle entrée ?
		<select size="3" name="choixEntree">
			<option value="sdc">Salade de crevette</option>
			<option value="terrine">Terrine du jour</option>
			<option value="tarte">Tarte du jour</option>
		</select>
	</div>
	<hr>
	<div>
		Choix du plat !
		<select size="3" name="choixPlat">
			<option value="wok">Wok au poulet</option>
			<option value="steak">Steak Frite</option>
			<option value="poisson">Poisson du jour</option>
		</select>
	</div>
	<hr>
	<div>
		Voulez-vous un dessert ?
		<input type="radio" value="1" name="dessert" /> Oui
		<input type="radio" value="0" name="dessert" /> Non<br/>
		Si oui, choisissez votre bouzin !
		<select size="3" name="choixDessert">
			<option value="dame">Dame blanche</option>
			<option value="creme">Creme brulee</option>
			<option value="tarteDeSaison">Tarte de saison</option>
		</select>
	</div>
	<hr>
	<div>
		Voulez-vous boire ?
		<input type="radio" value="1" name="boisson" /> Oui
		<input type="radio" value="0" name="boisson" /> Non<br/>
		Si oui, choisissez !
		<input type="checkbox" value="0" name="vin"/> Vin
		<input type="checkbox" value="1" name="eau"/> Eau
		<input type="checkbox" value="2" name="soda"/> Soda<br/>
		<hr>
	</div>
	<div>
		Voudrez une boisson chaude après ?
		<input type="radio" value="1" name="boisonChaude" /> Oui
		<input type="radio" value="0" name="boissonChaude" /> Non<br/>
	</div>
	<div>
		<input type="submit"/> <input type="reset"/>
	</div>
</form>
<div></div>
</body>
</html>
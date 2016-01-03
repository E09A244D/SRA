
<!DOCTYPE script PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<script type="text/javascript" src="jquery.js"></script>
<style> 
#maboite{height:0px; width:0px; background-color:black;height: 10px; color:white;  z-index : 2; margin: auto;position: absolute; left: 20% }
#arrier_plan{ background-color:black; z-index:1; border: 1px red;float: left; }
</style>
<body>
<div id="arrier_plan"></div>
<div id="maboite">
	
</div>
<script type="text/javascript">
$('#arrier_plan').animate({opacity : '0.7'
	, height: '100%'
	, width: '100%'
	, padding: '10px'
	}, 2000, 'linear')
.queue(function(){
$('#maboite').animate({
			opacity : '0.7',
			width : '60%'
			
			}, 2000, 'linear')
$('#maboite').animate({
			height : '100%'
			}, 2000,'linear')
.queue(function(){
	$('#maboite').html('<div id="close"><p id="fermer" onclick=\'effacer();\'>fermer</p></div><img id="photo" src="../lebestcoin/lebestcoin/site_annonces/users/marc/O10A1590711762/asus-Eee-computex-2007,1-7-18187-3.jpg"/>')
	$('#maboite').attr('align','center')
	$('#photo').attr('top','15px')
}
		)
})
function effacer(){
	$('#arrier_plan').hide();
}
			</script>
</body>
</html>

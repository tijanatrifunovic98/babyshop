<!DOCTYPE html>
<html lang="sr">
<head>
	<meta charset="UTF-8">
	<title>Baby shop</title>
	<link rel="stylesheet" type="text/css" href="" />
	<link rel="icon" type="" href="">
	<style>
	#dobrodosli{
		font-family: Comic Sans MS;
		font-size: 30px;
		top: 50px;
		left: 215px;
		position: absolute;
		background: rgba(255,0,0,0.3);
		}
	</style>
	
<body>
	<div id="wrap">
		<div id="header">
			<img class="hederi" src="">
		</div>
		<div id="meni">	
			<ul> 
				<li><a href="home.php">Početna</a></li> 
				<li><a href="kontakt.php">Kontakt</a></li> 
				<li><a href="lokacija.php">Lokacija</a></li>
				<!--<li><a href="shop/index.php">E-prodavnica</a></li>-->
			
 
			</ul>
		</div>
		<div id="content">
			<p id="dobrodosli"align="justify"><b>Dobrodošli u Baby Shop</b></p>
		</div>
		
		<div id="footer">
			
			<p id="datum">
                <small>Tijana Trifunovic & Tamara Tosic</small>
				<script>
					var datum = new Date();
					document.write(datum.getDate()+".02."+datum.getFullYear()+".");
				</script>
			</p>
			
		</div>
	</div>
</body>
</html>
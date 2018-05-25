<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>YAHAHA</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
background-image: url(arkaplan.gif);
background-repeat: repeat;
background-attachment: scroll;
background-color: white;
background-position: top-left;
}
		#wrapper{
			margin: auto;
			width:800px;
		}
		#footer{
			width: 800px;
			height: 300px;
		}
		#takimbilgileri{
			border: 1px #aaa;
		}
		#logo{
	float: left;
}
	</style>
</head>
<body>
<div id="logo"><img src="logo.png" width="250"></div>
<div id="wrapper">
	<div id="footer" style="float: left;"><img width=800px height="250" src="hoşgeldiniz.jpg"></div>

		
	<?php
	echo '<center><a style=" font-size:25px;color:white;background-color:black;" href="index.php">Anasayfa İçin Tıklayınız.</a></center><br>'; 
	echo '<center><h3 style="color:white; font-family:comic sans ms">Hoşgeldiniz '.strtoupper($_SESSION["kullanici"]).'</h3></center>'; 
	?>
	</div>
	<div id="article" >
	
		
			<legend><font color="white"><b>KULLANICILAR</legend>
			<table>
		<?php
			
		if($_SESSION["yasindogan"]==0)
			{
				
				
			echo '<tr><td width="100px"><a href="yasindogan.php" ><font color="red"><b><font size="5"> yasindogan</b></a></td><td width="200px"></td><td></td><td rowspan="10"></td></tr>';
			}
			else{ echo "Yasin doğan Kullanıcısını Gördünüz.<br>";}


			if($_SESSION["index"]==0) 
			{
				
				
			echo '<tr><td width="100px"><a href="hanifiyeler.php" ><font color="red"><b><font size="5">hanifiyeler</a></td><td width="200px"></td><td></td></tr>';
			}
			else{ echo "Hanifi Yeler Kullanıcısını Gördünüz.<br>";}
			if($_SESSION["index"]==0) 
			{
				
				
			echo '<tr><td width="100px"><a href="haruntunay.php" ><font color="red"><b><font size="5">haruntunay</a></td><td width="200px"></td><td></td></tr>';
			}
			else{ echo "Harun Tunay Kullanıcısını Gördünüz.<br>";}
			if($_SESSION["index"]==0) 
			
				
				
			
			?>
	
		
			
	
	</div>
</div>

</body>
</html>
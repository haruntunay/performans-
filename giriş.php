<?php
session_start();
ob_start();

	$kullanici=@$_POST["kullanici"];

	if(empty($kullanici))
	{
		echo '<script type="text/javascript">alert("kullanıcı adı girmelisiniz.");</script>';
	 echo "Anasayfaya gidiliyor.";
		header("; url=index.php");
	}
	else{
	

	$_SESSION["kullanici"]=$kullanici;
	$_SESSION["yasindogan"]=0;
	$_SESSION["hanifiyeler"]=0;
	$_SESSION["haruntunay"]=0;


	}

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
		body{ color:white; 
		font-size: 20px;
		}
	</style>
</head>
<body bgcolor="black">
<div id="wrapper">
	<div id="footer"><img width=800px src="hoşgeldiniz.jpg"></div>
	<div id="article">

			<?php 

		if(isset($_SESSION["kullanici"]))
		{
			echo '<h3 style="color:white;"><marquee>Hoşgeldiniz </marquee>'.$_SESSION["kullanici"].'</h3>';
			echo "YAHAHA=".$_SESSION["YAHAHA"]."<br>";
			
			echo '<a href="index.php">Anasayfa gitmek İçin Tıklayınız.</a><br>';
	        echo '<a href="kullanici.php">Kullanıcıları Görmek İçin Tıklayınız.</a>';
	
		}

		else {
		
		}
	?>
	</div>
</div>
>

</body</html>
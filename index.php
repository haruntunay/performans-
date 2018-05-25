<?php

session_start();
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hosgeldiniz YAHAHA</title>
	<meta charset="utf-8">pp
	<style type="text/css">
	body {
background-image: url(arkaplan.gif);
background-repeat: repeat;
background-attachment: scroll;
background-color: white;s
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
		input[type=text] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

.btn1 {
background-color:#44c767;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:19px;
padding:20px 63px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
}
.btn1:hover {
background-color:#5cbf2a;
}
.btn1:active {
position:relative;
top:1px;
}
body{ color:white; 
		font-size: 20px;
		}
	</style>
	<script type="text/javascript">
		function uyarı(){ confirm("Çıkmak istediğinize emin misiniz.");}
	</script>

</head>
<body bgcolor="black">
<script type="text/javascript">
	alert("YAHAHA");
</script>

<div id="wrapper">

	<div id="article">
	<?php 

		if(isset($_SESSION["kullanici"]))
		{
			echo '<h3 style="color:white;">Hoşgeldiniz '.$_SESSION["kullanici"].'</h3>';
			echo '<a href="index.php">Anasayfa İçin Tıklayınız.</a><br>';
	        echo '<a href="kullanici.php">Kullanıcılar için tıkla</a><br>';
	        echo '<a href="cikis.php" onclick="uyarı();">Çıkış için tıkla</a>';
	        
			
		}
		else {
			echo 
			'<br><br>
			<form action="giris.php" method="POST" name="form1">
				<font color="red">kullanıcı:<input type="text" name="kullanici">

				<button class="btn1">Giris</button>

			</form><br><br>';

		
		}

	?>
		
	</div>
</div>

</body>
</html>
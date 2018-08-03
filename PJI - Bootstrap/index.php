
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat');
  a:hover, a:visited{
  	text-decoration:none;
  	color:white;
  }
  a:link{
  	color:white;
  }
  body{
  	font-family: 'Montserrat', sans-serif;
  	background-image: url('imagem/back2.jpg');
  	background-repeat: no-repeat;
  	background-size:100%;
  	bottom: 0;
  	color: black;
  	left: 0;



  	background-size: cover;
  }
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<!-- logo -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Help IF</a>
			</div>
			<!-- menu -->
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="Creators.php">Creators</a></li>
					<li><a href="#">Forum</a></li>
					<li><a href="#">Logar</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container-fluid">
		<div class="container">
			<img src="imagem/logo.png">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-top:5%; margin-left:-6%">
					<p style="text-align: justify; color:white">Este site tem como objetivo principal oferecer suporte às vitimas da depressão. Tanto por experiência própria, como por pesquisa, temos a noção da grandeza deste problema, e perante o mesmo, decidimos criar uma plataforma online para um chat de atendimento, tendo como fundamento a interação entre usuário e paciente (usuário). Para mais detalhes vá até <span id="c"> <a href="Creators.php">Creators</a></span></p>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-top:1.5%; margin-left:3%;">
					<p><button type="button" class="btn btn-success">Acesse nosso forum!</button></p>			
				</div>
				
			</div>
		</div>
	</div>





<div style="margin-top:6.88%;">
	<?php
	include'rodape.php';
	?>
</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

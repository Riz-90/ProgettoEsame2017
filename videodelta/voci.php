<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VIDEODELTA - HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background:url('images/pexels-photo-315072.jpeg'); background-size: cover;">
  
	<?php
	
	$connessione = new mysqli ("localhost","root","matec","videodelta");
	
	?>
  
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">VIDEODELTA</a>
			</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Chi siamo<span class="sr-only">(current)</span></a></li>
				<li><a href="vocidef.php">Le voci</a></li>
				<li><a href="#">Gli studi</a></li>
				<li><a href="clienti4.php">I clienti</a></li>
				<li><a href="#">Dove siamo</a></li>
				<li><a href="#">Contatti</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crediti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Cartoni animati</a></li>
						<li><a href="#">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="#">Soap opera/Telenovela</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>-->
					</ul>
				</li>
				<li class="dropdown hidden-md hidden-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lingua<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li class="active"><a href="#">Italiano<span class="sr-only">(current)</span></a></li>
						<li><a href="#">Inglese</a></li>
						<li><a href="#">Cinese</a></li>
						<li><a href="#">Russo</a></li>
						<!--<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>-->
					</ul>
				</li>
			</ul>
      
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
			</ul>
			<form class="navbar-form navbar-right" role="search" action="ricerca.php" method="post">
				<div class="input-group">
					<input name ="ricerca" type="text" class="form-control" placeholder="Cerca">
					<span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
				</div>
			</form>
		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
			<body>
<div class="container">
  <h1>Le voci</h1>
  <p>Ascolta alcune delle nostre voci maschili e femminili.</p>      
  <p>I codici associati a ciascuna voce potranno esserti utili per richiedere un preventivo.</p>      
  <div class="row">
    <div class="col-sm-6" style="background-color:Deepskyblue;">
      <h3> Codice 101</h3>
      <audio controls>
      <source src="audio/101CORBETTA.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:lightblue;">
      <h3> Codice 102</h3>
      <audio controls>
	  <source src="audio/102ACCORNERO.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>
</div>
<div class="container">
    
  <div class="row">
    <div class="col-sm-6" style="background-color:Deepskyblue;">
      <h3> Codice 103</h3>
      <audio controls>
      <source src="audio/103BIAGINI.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:lightblue;">
      <h3> Codice 104</h3>
      <audio controls>
      <source src="audio/104DANDREA.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>
<div class="container">
  <div class="row">
    <div class="col-sm-6" style="background-color:Deepskyblue;">
      <h3> Codice 105</h3>
      <audio controls>
      <source src="audio/105DIBONO.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:lightblue;">
      <h3> Codice 106</h3>
      <audio controls>
      <source src="audio/106LOMBARDO.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>
<div class="container">
  
  <div class="row">
    <div class="col-sm-6" style="background-color:Pink;">
      <h3> Codice 201</h3>
      <audio controls>
      <source src="audio/201CAGGIULA.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:LightPink ;">
      <h3> Codice 202</h3>
      <audio controls>
	  <source src="audio/202MAZZA.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>
</div>
<div class="container">
    
  <div class="row">
    
      <div class="col-sm-6" style="background-color:Pink ;">
      <h3> Codice 203</h3>
      <audio controls>
      <source src="audio/203GIOLITTI.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:LightPink ;">
      <h3> Codice 204</h3>
      <audio controls>
	  <source src="audio/204MOTTOLA.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>
<div class="container">
  <div class="row">
    <div class="col-sm-6" style="background-color:Pink ;">
      <h3> Codice 205</h3>
      <audio controls>
      <source src="audio/205POLLANI.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    <div class="row">
	 <div class="col-sm-6" style="background-color:LightPink ;">
      <h3> Codice 206</h3>
      <audio controls>
	  <source src="audio/206ZILIOTTO.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    </div>

    
  </div>
</div>


</div>
</div>

    
</body>
			
		<footer class="panel-footer">
				<div class="row">
					<div class="col-xs-12" style="text-align:center">
						<h6>Webmaster Maurizio Masi & Andrea Di Credico<br>2017<br>a.dicredico@videodeltasrl.it</h6>
					</div>
				</div>
		</footer>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
  <body>
  
	<?php
	
	$connessione = new mysqli ("localhost", "root", "matec", "videodelta");
	
	?>
  
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<h1>VIDEODELTA</h1>
			</div>
			<div class="col-xs-4 hidden-xs">
				<ul class="list-inline text-right">
					<li><a href="#"><img src="images/Italy-Flag-icon (2).png" title="ITA" alt="ITA"></a></li>
					<li><a href="#"><img src="images/United-Kingdom-flag-icon (2).png" title="ENG" alt="ENG"></a></li>
					<li><a href="#"><img src="images/China-Flag-icon (2).png" title="CHI" alt="CHI"></a></li>
					<li><a href="#"><img src="images/Russia-Flag-icon (2).png" title="RUS" alt="RUS"></a></li>
				</ul>
			</div>
		</div>
	
	
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
				<li><a href="index.php">Chi siamo</a></li>
				<li><a href="#">Le voci</a></li>
				<li><a href="#">Gli studi</a></li>
				<li><a href="#">I clienti</a></li>
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
				<li class="dropdown hidden-sm hidden-md hidden-lg"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lingua<span class="caret"></span></a>
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

		<div class="row">
			<div class="col-xs-8">
			<div class="page-header"><h1>Risultati della ricerca</h1></div>
			
			<?php
			
			$query_ricerca = "SELECT * FROM serie_tv WHERE nome like '%".$_REQUEST["ricerca"]."%' limit 9";
			
			if (!($risultato = $connessione->query($query_ricerca)))
				die ("Query su database fallita!");
			
			$i=1;
			$n=0;
			while ($riga = $risultato->fetch_array()){
				$id = $riga["id"];
				$immagine = $riga["immagine"];
				$nome = $riga["nome"];
					
				if ($i==1) {
					echo "<div class='row'>";
				}
				
				echo "<div class='span3'>";
				echo "<article><img class='img-thumbnail locandina' src='images/serie_tv/$immagine'>";
				echo "<h5>$nome</h5>";
				echo "</article>";
				echo "</div>";
				
				if ($i==4){
					echo "</div>";
					$i=1;
				} 	else {
						$i++;
				}
				$n++;
			}
			if ($n>0 && $i!=1){
				echo "</div>";
			}
			if ($n==0){
				echo "<p>Nessun risultato trovato!</p>";
			}
			
			?>
			
			</div>
			<div class="col-xs-4">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">Panel Heading</div>
						<div class="panel-body">Panel Content</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">Panel Heading</div>
						<div class="panel-body">Panel Content</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">Panel Heading</div>
						<div class="panel-body">Panel Content</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">Panel Heading</div>
						<div class="panel-body">Panel Content</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>FOOTER</h1>
					</div>
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
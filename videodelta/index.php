<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VIDEODELTA - HOME</title>

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
  
	<div class="container-fluid" style="background-color:transparent;">
		<div class="row">
			<div class="col-md-8">
				<h1>VIDEODELTA - Doppiaggio e Post-Produzione</h1>
			</div>
			<div class="col-md-4 hidden-xs hidden-sm">
				<ul class="list-inline text-right">
					<li class="active"><a href="#"><img src="images/bandiere_lingua/Italy-Flag-icon (2).png" title="ITA" alt="ITA"></a></li>
					<li><a href="#"><img src="images/bandiere_lingua/United-Kingdom-flag-icon (2).png" title="ENG" alt="ENG"></a></li>
					<li><a href="#"><img src="images/bandiere_lingua/China-Flag-icon (2).png" title="CHI" alt="CHI"></a></li>
					<li><a href="#"><img src="images/bandiere_lingua/Russia-Flag-icon (2).png" title="RUS" alt="RUS"></a></li>
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
				<li class="active"><a href="#">Chi siamo<span class="sr-only">(current)</span></a></li>
				<li><a href="voci.php">Le voci</a></li>
				<li><a href="#">Gli studi</a></li>
				<li><a href="clienti.php">I clienti</a></li>
				<li><a href="#">Dove siamo</a></li>
				<li><a href="#">Contatti</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crediti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Cartoni animati</a></li>
						<li><a href="#">Film</a></li>
						<li><a href="serie_tv.php">Serie tv</a></li>
						<li><a href="#">Soap opera/Telenovela</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="tmp.php">tmp</a></li>
						<!--<li role="separator" class="divider"></li>
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
	<div class="container">
		<div class="row hidden-xs hidden-sm">
		<div class="col-xs-12">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

	<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/slideshow/torino1.jpg" alt="Los Angeles">
					<div class="carousel-caption">
					<h2>Torino</h2>
					<p>Studi e Uffici</p>
					</div>
				</div>

				<div class="item">
					<img src="images/slideshow/milano2.jpg" alt="Chicago">
					<div class="carousel-caption">
					<h2>Milano</h2>
					<p>Una descrizione di questa immagine</p>
					</div>
				</div>

				<div class="item">
					<img src="images/slideshow/roma5.jpg" alt="New York">
					<div class="carousel-caption">
					<h2>Roma</h2>
					<p>Una descrizione di questa immagine</p>
					</div>
				</div>
			</div>

	<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Chi siamo</h1>
			</div>
			<div class="col-md-8">
			<p>
			Videodelta Srl è una società di doppiaggio e post-produzione audio-video sita in Torino. Fondata nel 1986, Videodelta, in questi 30 anni di ininterrotta presenza nel 
			panorama televisivo italiano, ha acquisito e consolidato una vasta esperienza nella creazione dell’edizione italiana di tipologie eterogenee di programmi TV, quali: 
			film, telefilm, cartoni animati, documentari, soap opera, telenovelas. I servizi offerti consentono di realizzare la versione italiana di prodotti televisivi 
			conformemente alle specifiche tecniche richieste dai clienti e dai principali broadcaster italiani e stranieri (RTI, RAI, LA7, DISNEY, WARNER BROS, FOX, MGM, 
			UNIVERSAL, PARAMOUNT, NETFLIX). Il prodotto finale è confezionato in SD o HD partendo dalla ricezione dei materiali (via rete con SmartJog o Aspera o su supporto 
			fisico), con traduzione e adattamento dei dialoghi, programmazione, registrazione e sincronizzazione del doppiaggio, per terminare con missaggio, controllo qualità, 
			lavorazioni video e grafiche (editing, titoli, cartelli, sottotitoli). Videodelta si avvale di un ampio organico di traduttori e adattatori, fonici e montatori video, 
			nonché di un ricco panel di doppiatori professionisti e direttori del doppiaggio attivi a Torino, Roma e Milano.
			</p>
			</div>
			<div class="col-md-4">
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#richiedipreventivo">Richiedi un preventivo</button>

								<!-- Modal -->
								<div class="modal fade" id="richiedipreventivo" role="dialog">
									<div class="modal-dialog">
    
										<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Richiedi un preventivo</h4>
											</div>
											<div class="modal-body">
												<form action="" method="">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome">
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome">
													</div>
													<div class="form-group">
														<div class="radio">
															<label><input type="radio" name="optradio">Privato</label>
														</div>
														<div class="radio">
															<label><input type="radio" name="optradio">Azienda</label>
														</div>
													</div>
													<div class="form-group">
  														<label for="comment">Ragione sociale dell'azienda:</label>
 														<textarea class="form-control" rows="1" id="comment"></textarea>
													</div>
													<div class="form-group">
  														<label for="comment">Lingua originale del prodotto da doppiare:</label>
 														<textarea class="form-control" rows="1" id="comment"></textarea>
													</div>
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Inserisci email">
													</div>
													<div class="form-group">
														<label for="tel">Numero di telefono:</label>
														<input type="tel" class="form-control" name="tel" id="tel" value="" placeholder="Inserisci numero di telefono">
													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
						</div>
					</div>
						
					<div class="panel panel-default">
						<div class="panel-heading">
							<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="collapse" data-target="#lavoraconnoi">Lavora con noi</button>
						</div>
						<div id="lavoraconnoi" class="panel-collapse collapse">
							<div class="panel-body">
								<!-- Trigger the modal with a button -->
								<button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#proponicollaborazione">Proponi una collaborazione</button>
							
								<!-- Modal -->
								<div class="modal fade" id="proponicollaborazione" role="dialog">
									<div class="modal-dialog">
    
										<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Proponi una collaborazione</h4>
											</div>
											<div class="modal-body">
												<form action="" method="">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome">
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome">
													</div>
													<div class="form-group">
														<label for="">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Inserisci email">
													</div>
													<div class="form-group">
  														<label for="comment">Vorrei collaborare con VIDEODELTA in qualità di:</label>
 														<textarea class="form-control" rows="5" id="comment"></textarea>
													</div>
													<div class="form-group">
    													<label for="exampleFormControlFile1">Allega il tuo CV in formato PDF</label>
    													<input type="file" class="form-control-file" id="exampleFormControlFile1">
  													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
							</div>
							<div class="panel-body">
						<!-- Trigger the modal with a button -->
								<button type="button" class="btn btn-default btn-lg btn-block btn-warning" data-toggle="modal" data-target="#richiediprovino">Richiedi un provino gratuito</button>
							
						<!-- Modal -->
								<div class="modal fade" id="richiediprovino" role="dialog">
									<div class="modal-dialog">
    
								<!-- Modal content-->
										<div class="modal-content">
	    									<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Richiedi un provino</h4>
											</div>
											<div class="modal-body">
												<form action="richiedi_provino.php" method="post">
													<div class="form-group">
														<label for="name">Nome</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Inserisci nome">
													</div>
													<div class="form-group">
														<label for="surname">Cognome</label>
														<input type="text" class="form-control" name="surname" id="surname" placeholder="Inserisci cognome">
													</div>
													<div class="form-group">
														<label for="">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Inserisci email">
													</div>
													<div class="form-group">
    													<label for="exampleFormControlFile1">Allega il tuo CV in formato PDF</label>
    													<input type="file" class="form-control-file" id="exampleFormControlFile1">
  													</div>
													<button type="submit" class="btn btn-default">Invia</button>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
											</div>
										</div>
      
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Collaborazioni con:</div>
					<div class="panel-body">
						<a href="http://www.scuolateatrosergiotofano.it/cms/index.php?option=com_content&view=article&id=25&Itemid=30">
							<img src="images/loghi/tofano.jpg"  alt="logoScuolaTeatroSergioTofano" class="img-responsive img-thumbnail">
						</a>
						<a href="https://popcorntv.it/">
							<img src="images/loghi/popcorn.jpg" alt="logoPopcorn" class="img-responsive img-thumbnail">
						</a>
						<a href="http://www.pattyeditore.it/">
							<img src="images/loghi/patty.jpg" alt="logoPattyEditore" class="img-responsive img-thumbnail">
						</a>
						<a href="http://www.delta9.it/">
							<img src="images/loghi/deltanove.jpg" alt="logoDeltaNove" class="img-responsive img-thumbnail">
						</a>
					</div>
				</div>
			</div>
		</div>
		<footer class="panel-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12" style="text-align:center">
						<h6>Webmaster Maurizio Masi & Andrea Di Credico<br>a.dicredico@videodeltasrl.it</h6>
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
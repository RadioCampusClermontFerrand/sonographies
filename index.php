<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
        $balade = $_GET["b"];
        if ($balade == "rocheblanche") {
            $balade_fullname = "La Roche Blanche";
        }
        else if ($balade == "glyphs") {
            $balade_fullname = "La bibliothèque des glyphs";        
        }
        else {
            $balade = "";
            $balade_fullname = "";
        }
  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sonographies<?php if ($balade != "") echo " - ".$balade_fullname; ?></title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"></link>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="css/sidebar.css" rel="stylesheet"></link>
    <link href="css/map.css" rel="stylesheet"></link>
    <link href="css/main.css" rel="stylesheet"></link>
    
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />

    <script src="https://npmcdn.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>

  </head>
  <body>  
  <!-- barre latérale -->
    <nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                                    <span class="sr-only">Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Écouter...</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse <?php if ($balade != "") echo "in"; ?>" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
                            <li class="dropdown">
					<a href="?b=#main" style="z-index: 1;" class="selected-menu" id="display-mainmap"><span class="pull-right">Voir toutes les balades sonores</span><span  style="font-size:16px;" class="showopacity glyphicon glyphicon-map-marker"></span></a>
                            </li>
                            <li class="dropdown">
					<a type="button" style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-headphones main-play"></a>
					<a style="z-index: 2; float: left; cursor: pointer; " class="main-pause hide"><span style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-pause"></span></a>
					<a id="display-glyphs" href="?b=glyphs#main" style="z-index: 1;" class="selected-menu" data-toggle="collapse" data-target="#glyphs" data-collapse-group="sidemenu" <?php if ($balade == "glyphs") echo 'aria-expanded="true"'; ?>><span class="pull-right">La bibliothèque de glyphs</span><span  style="font-size:16px;" class="showopacity glyphicon glyphicon-map-marker"></span></a>
					<ul class="list-group playlist <?php if ($balade == "glyphs") echo "in"; else echo "collapse"; ?>" style="clear: left;" id="glyphs">
                                            <li class="list-group-item"><p>Clermont-Ferrand 2043, la ville est sous les eaux... une jeune femme retourne sur les lieux de son enfance et entraîne l’auditeur-promeneur dans sa redécouverte du quartier Saint-Jacques à travers 5 pastilles sonores.</p>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-2buttons">Pastille 1 
                                                        <span id="timer-b1p1">
                                                            <span id="currentTime-b1p1">00:00</span> / 
                                                            <span id="duration-b1p1">-</span>
                                                        </span>
                                                    </div>
                                                    <a href="balade1/1 pastille.mp3" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    <a class="list-group-item pull-right play" id="b1p1"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>
                                                    <a class="list-group-item pull-right pause hide" id="b1p1-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-2buttons">Pastille 2
                                                        <span id="timer-b1p2">
                                                            <span id="currentTime-b1p2">00:00</span> / 
                                                            <span id="duration-b1p2">-</span>
                                                        </span>
                                                    </div>
                                                    <a href="balade1/2 pastille.mp3" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    <a class="list-group-item pull-right play" id="b1p2"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>
                                                    <a class="list-group-item pull-right pause hide" id="b1p2-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-2buttons">Pastille 3
                                                        <span id="timer-b1p3">
                                                            <span id="currentTime-b1p3">00:00</span> / 
                                                            <span id="duration-b1p3">-</span>
                                                        </span>
                                                    </div>
                                                    <a href="balade1/3 pastille.mp3" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    <a class="list-group-item pull-right play" id="b1p3"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>
                                                    <a class="list-group-item pull-right pause hide" id="b1p3-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-2buttons">Pastille 4
                                                        <span id="timer-b1p4">
                                                            <span id="currentTime-b1p4">00:00</span> / 
                                                            <span id="duration-b1p4">-</span>
                                                        </span>
                                                    </div>
                                                    <a href="balade1/4 pastille.mp3" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    <a class="list-group-item pull-right play" id="b1p4"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>
                                                    <a class="list-group-item pull-right pause hide" id="b1p4-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>
                                                </div>
                                            </li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-2buttons">Pastille 5
                                                        <span id="timer-b1p5">
                                                            <span id="currentTime-b1p5">00:00</span> / 
                                                            <span id="duration-b1p5">-</span>
                                                        </span>
                                                    </div>
                                                    <a href="balade1/5 pastille.mp3" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    <a class="list-group-item pull-right play" id="b1p5"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>
                                                    <a class="list-group-item pull-right pause hide" id="b1p5-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>
                                                    </div>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-1button">Télécharger toutes les pastilles</div>
                                                    <a href="balade1/balade1.zip" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    </div>
                                            </li>
                                            <li class="list-group-item"><div class="list-group-horizontal">
                                                    <div class="list-group-item entry-1button">Télécharger la carte à imprimer</div>
                                                    <a href="balade1/SonographiesCarteA4.pdf" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>
                                                    </div>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li class="list-group-item">
                                                <p><strong>Réalisation&nbsp;:</strong> Thibault Mangeard et Emmanuelle Diabanicana, participants à l’atelier de création de balade sonore sous la direction de  Aude Fournier.<br />
                                                    <strong>Voix&nbsp;:</strong> Fatou Dicko<br />
                                                    <strong>Production&nbsp;:</strong> <a href="http://www.musiquesdemesurees.net">Musiques Démesurées</a> et <a href="http://campus-clermont.net">Radio Campus Clermont-Ferrand</a>, avec le soutien de la <a href="http://www.culturecommunication.gouv.fr/Regions/Drac-Auvergne">Drac Auvergne</a>
                                                    <strong>Création&nbsp;:</strong> octobre 2015
                                                    </p>
                                                <p class="comment">45° 46' 0.318 - 3° 5' 25.0 <a href="http://www.openstreetmap.org/?mlat=45.766755&mlon=3.090278#map=16/45.7669/3.0921"><span class="showopacity glyphicon glyphicon-map-marker"></span></a></p>
                                            </li>
					</ul>
                            </li>
                            <li class="dropdown">
					<a type="button" style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-headphones main-play"></a>
					<a style="z-index: 2; float: left; cursor: pointer; " class="main-pause hide"><span style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-pause"></span></a>
					<a id="display-rocheblanche" href="?b=rocheblanche#main" style="z-index: 1;" class="dropdown-toggle selected-menu" data-toggle="collapse" data-target="#rocheblanche"  data-collapse-group="sidemenu" <?php if ($balade == "rocheblanche") echo 'aria-expanded="true"'; ?>><span class="pull-right"> La Roche Blanche</span><span  style="font-size:16px;" class="showopacity glyphicon glyphicon-map-marker"></span></a>
					<ul class="list-group playlist <?php if ($balade == "rocheblanche") echo "in"; else echo "collapse"; ?>" style="clear: left;" id="rocheblanche">
                                            <li class="list-group-item"><p>Prochainement disponible en ligne, une balade sonore à la Roche Blanche.</p>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li class="list-group-item">
                                                <p>École Jules Ferry - La Roche Blanche - Année 2015/2016<br />
                                                    <strong>Réalisation&nbsp;:</strong> classes de CE2 - CM1<br />
                                                    <strong>Montage sonore&nbsp;:</strong> Hélène Passet<br />
                                                    <strong>Voix comédien&nbsp;:</strong> Clément Paré<br />
                                                    <strong>Design graphique&nbsp;:</strong> Philippe Gaujard<br />
                                                    <strong>Production&nbsp;:</strong> <a href="http://campus-clermont.net">Radio Campus Clermont-Ferrand</a>, <a href="http://www.ot-gergovie.fr/">Gergovie val d'Allier</a>, <a href="http://www.mairie-larocheblanche.fr/">mairie de La Roche Blanche</a><br />
                                                    <strong>Création prévue</strong> en septembre 2016
                                                    </p>
                                                <p class="comment">45° 42' 7.033 - 3° 7' 45.29 <a href="http://www.openstreetmap.org/?mlat=45.7019536&mlon=3.1292472#map=16/45.7019536/3.1292472"><span class="showopacity glyphicon glyphicon-map-marker"></span></a></p>
                                            </li>
					</ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown">
					<a href="#" class="dropdown-toggle" ><span style="font-size:16px;" class="showopacity glyphicon glyphicon-info-sign"></span><span class="pull-right">Crédits</span></a>
					<ul class="list-group playlist" role="menu" id="credit" style="clear: left;">
                                            <li class="list-group-item">Le projet <strong><span class="red">sono</strong>graphies</em> a été initié en 2015 par <a href="http://campus-clermont.net">Radio Campus Clermont-Ferrand</a>, afin de proposer une nouvelle manière d'écouter la radio, <em>in situ</em>.</li>
					</ul>
                            </li>
                        </ul>
                    </div>
            </div>
    </nav>


    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
  
  <div class="main">
    <div id="content">
        <div data-collapse-group="maps" id="main-map" class="<?php if ($balade == "") echo "visible"; else echo "hidden"; ?>"></div>
        <img data-collapse-group="maps" id="glyphs-map" src="images/carte_web-01.jpg" class="img-content <?php if ($balade == "glyphs") echo "visible"; else echo "hidden"; ?>" alt="carte de la promenade" />
        <div data-collapse-group="maps" id="rocheblanche-map" class="<?php if ($balade == "rocheblanche") echo "visible"; else echo "hidden"; ?>">Bientôt disponible...</div>
    </div>
    <div id="page-header">
    <h1><span class="red">SONO</span>GRAPHIES<small>balades sonores</small></h1>
  </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- sidebar -->
    <script src="js/sidebar.js"></script>
    <script src="jplayer/jquery.jplayer.js"></script>
    <script src="js/player.js"></script>


    <script src="js/map.js"></script>
    
  </body>
</html>

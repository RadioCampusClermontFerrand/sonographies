<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
  
      function convertCoordToHuman($coord, $direction) {
        $isnorth = $coord>=0;
        $coord = abs($coord);
        $deg = floor($coord);
        $coord = ($coord-$deg)*60;
        $min = floor($coord);
        $sec = floor(($coord-$min)*60);
        // or if you want the string representation
        return sprintf("%d&deg; %d' %d\" %s", $deg, $min, $sec, $isnorth ? ($direction == 0 ? 'nord' : 'ouest') : ($direction == 0 ? 'sud' : 'est'));
      }
      
      $balades = array(
                      array("id" => "glyphs",
                            "nom" => "La bibliothèque des glyphs",          
                            "description" => "<p>Clermont-Ferrand 2043, la ville est sous les eaux... une jeune femme retourne sur les lieux de son enfance et entraîne l’auditeur-promeneur dans sa redécouverte du quartier Saint-Jacques à travers 5 pastilles sonores.</p>",
                            "lientelechargement" => "balade1/balade1.zip",
                            "carteimprimer" => "balade1/SonographiesCarteA4.pdf",
                            "auteurs" =>  "<p><strong>Réalisation&nbsp;:</strong> Thibault Mangeard et Emmanuelle Diabanicana, participants à l’atelier de création de balade sonore sous la direction de  Aude Fournier.<br />                                                   <strong>Voix&nbsp;:</strong> Fatou Dicko<br />                                                    <strong>Production&nbsp;:</strong> <a href=\"http://www.musiquesdemesurees.net\">Musiques Démesurées</a> et <a href=\"http://campus-clermont.net\">Radio Campus Clermont-Ferrand</a>, avec le soutien de la <a href=\"http://www.culturecommunication.gouv.fr/Regions/Drac-Auvergne\">Drac Auvergne</a>                                                    <strong>Création&nbsp;:</strong> octobre 2015                                                    </p>",
                            "coordonnees" => array(45.766755, 3.090278),
                            "mp3" => array(array("fichier" => "balade1/1 pastille.mp3"),
                                           array("fichier" => "balade1/2 pastille.mp3"),
                                           array("fichier" => "balade1/3 pastille.mp3"),
                                           array("fichier" => "balade1/4 pastille.mp3"),
                                           array("fichier" => "balade1/5 pastille.mp3")),
                            "carteimg" => "balade1/Parcours.png"),
                            array("id" => "rocheblanche",
                            "nom" => "La Roche Blanche",          
                            "description" => "<p>Balade sonore dans le village&nbsp;: deux classes de l’école Jules Ferry  et 1 comédien vous emmènent en balade enregistrée, entre imaginaire et réalité, et vous racontent le territoire de façon inattendue. Venez (re)découvrir le village comme vous ne l’avez jamais entendu&nbsp;!</p>",
                            "lientelechargement" => "balade2/sonographies - la roche blanche.zip",
                            "carteimprimer" => "balade2/SonographiesRocheBlanche.pdf",
                            "auteurs" =>  "<p>École Jules Ferry - La Roche Blanche - Année 2015/2016<br />
                                           <strong>Réalisation&nbsp;:</strong> classes de CE2 - CM1 sous la direction de Hélène Passet<br />
                                           <strong>Création et montage sonore&nbsp;:</strong> Hélène Passet<br />
                                           <strong>Voix comédien&nbsp;:</strong> Clément Paré<br />
                                           <strong>Design graphique&nbsp;:</strong> Philippe Gaujard<br />
                                           <strong>Production&nbsp;:</strong> <a href=\"http://campus-clermont.net\">Radio Campus Clermont-Ferrand</a>, Office de Tourisme <a href=\"http://www.ot-gergovie.fr/\">Gergovie val d'Allier</a>, <a href=\"http://www.mairie-larocheblanche.fr/\">mairie de La Roche Blanche</a><br />
                                           <strong>Création&nbsp;:</strong> septembre 2016
                                           </p>",
                            "coordonnees" => array(45.70160, 3.12975),
                            "mp3" => array(array("fichier" => "balade2/1 Fontaine Napoléon III - la roche blanche.mp3",
                                                           "nom" => "Fontaine Napoléon III"),
                                            array("fichier" => "balade2/2 Ancien bassin Mairie - la roche blanche.mp3",
                                                           "nom" => "Ancien bassin Mairie"),
                                            array("fichier" => "balade2/3 Grottes et Tour Julia - la roche blanche.mp3",
                                                           "nom" => "Grottes et Tour Julia"),
                                            array("fichier" => "balade2/4 Auzon et Géographie - la roche blanche.mp3",
                                                           "nom" => "Auzon et Géographie"),
                                            array("balade2/5 Fontaines - la roche blanche.mp3",
                                                           "nom" => "Fontaines")),
                            "carteimg" => "balade2/larocheblanche.png"),
                      array("id" => "tiretaine",
                            "nom" => "La Tiretaine",          
                            "description" => "<p>Bloqué dans une dimension parallèle obscure et étrange, l’auditeur devra suivre la voix d’un guide mystérieux et ainsi faire face à quelques obstacles et épreuves. Parviendra–t-il à s’échapper et à revenir dans le monde réel&nbsp;?</p>                                            <p>Inauguration officielle le 30 mai 2017, départ à 18h square Bompart.</p>",
                            "lientelechargement" => "balade3/la tiretaine.zip",
                            "auteurs" =>  "<p>Atelier du SUC - Radio Campus Clermont-Ferrand Année 2016/2017<br />
                                                    <strong>Réalisation&nbsp;:</strong> Alexia Carron-Bogacz, Thibaud Déchance, Charlène Dosio, Loriane Gauthier, Nina Guyot, Manon Le Bourhis, Simon Quentin et Julie Tuffery, étudiants de l'atelier du SUC création sonore<br />
                                                    <strong>Voix comédien&nbsp;:</strong> Simon Quentin<br />
                                                    <strong>Design graphique&nbsp;:</strong> Jean-Marie Favreau<br />
                                                    <strong>Production&nbsp;:</strong> <a href=\"http://campus-clermont.net\">Radio Campus Clermont-Ferrand</a>, <a href=\"https://culture.clermont-universite.fr/\">Service Université Culture</a> de l'Université Clermont Auvergne, avec le soutien de la <a href=\"https://clermont-ferrand.fr/\">ville de Clermont-Ferrand</a><br />
                                                    <strong>Création&nbsp;:</strong> mai 2017
                                                    </p>",
                            "coordonnees" => array(45.78131, 3.07985),
                            "mp3" => array(array("fichier" => "balade3/1- pastille le moulin.mp3",
                                                           "nom" => ""),
                                           array("fichier" => "balade3/2- pastille collège.mp3",
                                                           "nom" => ""),
                                           array("fichier" => "balade3/3- pastille la fontaine.mp3",
                                                           "nom" => ""),
                                           array("fichier" => "balade3/4- pastille l'église.mp3",
                                                           "nom" => ""),
                                           array("fichier" => "balade3/5- pastille quartier calme.mp3",
                                                           "nom" => ""),
                                           array("fichier" => "balade3/6- pastille le port.mp3",
                                                           "nom" => ""),
                                                           ),
                            "carteimg" => "balade3/tiretaine-site.png"),
                      array("id" => "walktrip",
                            "nom" => "Walk Trip de Recycl'art Auvergne",          
                            "description" => "<p>Radio Campus Clermont-Ferrand 93.3 vous propose une balade sonore à travers la ville et à travers les murs, le long du parcours Walk Trip de Recycl'art Auvergne. Découvrez et redécouvrez ces quelques lieux du centre de Clermont-Ferrand grâce à votre Smartphone. Branchez vous et laissez vous guider au fil des pastilles ! </p><p>Inauguration officielle le 25 mai 2019, départ à 10h30 place de la victoire.</p>",
                            "lientelechargement" => "balade4/walktrip.zip",
                            "auteurs" =>  "<p>Radio Campus Clermont-Ferrand 2019<br />
                                                    <strong>Production&nbsp;:</strong> <a href=\"http://campus-clermont.net\">Radio Campus Clermont-Ferrand</a>
                                                    <strong>Création&nbsp;:</strong> mai 2019
                                                    </p>",
                            "coordonnees" => array(45.77772, 3.08588),
                            "mp3" => array(array("fichier" => "balade4/1 Intro Office Tourisme FINALE.mp3",
                                                           "nom" => "Office de Tourisme"),
                                           array("fichier" => "balade4/2 Place de la Victoire.mp3",
                                                           "nom" => "Place de la Victoire"),
                                           array("fichier" => "balade4/3 Imaginarium.mp3",
                                                           "nom" => "Imaginarium"),
                                           array("fichier" => "balade4/4 Cat Lounge.mp3",
                                                           "nom" => "Cat Lounge"),
                                           array("fichier" => "balade4/5 Dynamite games.mp3",
                                                           "nom" => "Dynamite games"),
                                           array("fichier" => "balade4/6 Aperetik.mp3",
                                                           "nom" => "Aperetik"),
                                           array("fichier" => "balade4/7 splif.mp3",
                                                           "nom" => "Splif"),
                                           array("fichier" => "balade4/8 tapissier.mp3",
                                                           "nom" => "Tapissier"),
                                           array("fichier" => "balade4/9 Sonic Red + Rue du Port.mp3",
                                                           "nom" => "Sonic Red &amp; Rue du Port"),
                                           array("fichier" => "balade4/10 Evil One Comics.mp3",
                                                           "nom" => "Evil One Comics"),
                                           array("fichier" => "balade4/11 marche.mp3",
                                                           "nom" => "Marché"),
                                           array("fichier" => "balade4/12 Des pions et merveilles.mp3",
                                                           "nom" => "Des pions et merveilles"),
                                           array("fichier" => "balade4/13 Armoire a Cuillere.mp3",
                                                           "nom" => "L'armoire à cuillère"),
                                           array("fichier" => "balade4/14 Incendie de Boulangerie.mp3",
                                                           "nom" => "Incendie de boulangerie"),                                                           
                                                           ),
                            "carteimg" => "balade4/walktrip.png")
                          
          );
      
  
        $num_balade = -1;
        $balade = "";
        $balade_fullname = "";
        $curid = 0;
        foreach($balades as $b) {
          $curid += 1;
          if ($_GET["b"] == $b["id"]) {
            $num_balade = $nb;
            $balade = $b["id"];
            $balade_fullname = $b["nom"];
            $num_balade = $curid;
            break;
          }
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
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet@1.0.0-rc.3/dist/leaflet.js"></script>

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
                                <a type="button" style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-headphones main-play"></a>
                                <a style="z-index: 2; float: left; cursor: pointer; " class="main-pause hide"><span style="font-size:16px; z-index: 2; float: left;" class="showopacity glyphicon glyphicon-pause"></span></a>
					<a href="/#main" style="z-index: 1;" class="selected-menu" id="display-mainmap"><span class="pull-right">Voir toutes les balades sonores</span><span  style="font-size:16px;" class="showopacity glyphicon glyphicon-map-marker"></span></a>
                            </li>
                            <?php 
                              $idBalade = 1;
                              foreach($balades as $bTab) {
                                echo '<li class="dropdown">';
                                echo '<a id="display-'.$bTab["id"].'" href="/'.$bTab["id"].'" style="z-index: 1;" class="selected-menu" data-toggle="collapse" data-target="#'.$bTab["id"].'" data-collapse-group="sidemenu" ';
                                if ($balade == $bTab["id"]) echo 'aria-expanded="true"'; 
                                echo '><span class="pull-right">' . $bTab["nom"] .'</span><span  style="font-size:16px;" class="showopacity glyphicon glyphicon-map-marker"></span></a>';
                                echo '<ul class="list-group playlist ';
                                if ($balade == $bTab["id"]) echo "in"; else echo "collapse";
                                echo '" style="clear: left;" id="'.$bTab["id"].'">';
                                echo '<li class="list-group-item">'.$bTab["description"]."</li>";
                                echo '<li role="separator" class="divider"></li>';
                                $idPastille = 1;
                                foreach($bTab["mp3"] as $mp3) {
                                   echo '<li class="list-group-item"><div class="list-group-horizontal">';
                                   echo '<div class="list-group-item entry-2buttons">Pastille '. $idPastille;
                                   if (array_key_exists("nom", $mp3)) {
                                    echo '<span class="titre-pastille">'.$mp3["nom"].'</span>';
                                   }
                                   $codePastille = 'b'.$idBalade.'p'.$idPastille;
                                   echo '<span id="timer-'.$codePastille.'"><span id="currentTime-'.$codePastille.'">00:00</span> / <span id="duration-'.$codePastille.'">-</span></span>';
                                   echo "</div>";
                                   echo '<a href="'.$mp3["fichier"].'" class="list-group-item pull-right" download><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>';
                                   echo '<a class="list-group-item pull-right play" id="'.$codePastille.'"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-play"></span></a>';
                                   echo '<a class="list-group-item pull-right pause hide" id="'.$codePastille.'-pause"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-pause"></span></a>';
                                   echo '</div>';
                                   echo '</li>';
                                
                                  $idPastille += 1;
                                }
                                echo '<li role="separator" class="divider"></li>';
                                if (array_key_exists("lientelechargement", $bTab)) {
                                    echo '<li class="list-group-item"><div class="list-group-horizontal">';
                                    echo '<div class="list-group-item entry-1button">Télécharger toutes les pastilles</div>';
                                    echo '<a href="'.$bTab["lientelechargement"].'" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                                if (array_key_exists("carteimprimer", $bTab)) {
                                    echo '<li class="list-group-item"><div class="list-group-horizontal">';
                                    echo '<div class="list-group-item entry-1button">Télécharger la carte à imprimer</div>';
                                    echo '<a href="'.$bTab["carteimprimer"].'" class="list-group-item pull-right"><span style="font-size:16px;" class="showopacity glyphicon glyphicon-download-alt"></span></a>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                                echo '<li role="separator" class="divider"></li>';
                                echo ' <li class="list-group-item">';
                                echo $bTab["auteurs"];
                                
                                $coord1Humain = convertCoordToHuman($bTab["coordonnees"][0], 0);
                                $coord2Humain = convertCoordToHuman($bTab["coordonnees"][1], 1);
                                echo '<p class="comment">'.$coord1Humain.' - '.$coord2Humain.' <a href="http://www.openstreetmap.org/?mlat='.$bTab["coordonnees"][0].'&mlon='.$bTab["coordonnees"][1].'.#map=16/'.$bTab["coordonnees"][0].'/'.$bTab["coordonnees"][1].'"><span class="showopacity glyphicon glyphicon-map-marker"></span></a></p>';
                                echo '</li>';
                                echo '</ul>';
                                echo '</li>';
                                $idBalade += 1;
                              }
                            
                            ?>
 
                                            
                                            
                                            
                            
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
        <?php 
          foreach($balades as $bTab) {
            echo '<img data-collapse-group="maps" id="'.$bTab["id"].'-map" src="'.$bTab["carteimg"].'" class="img-content ';
            if ($balade == $bTab["id"]) 
              echo "visible"; 
            else 
              echo "hidden";
            echo '" alt="carte de la promenade" />';
          
          }
            
        ?>
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
    <script src="jplayer/jquery.jplayer.js"></script>
    
    <!-- player -->
    
    <script>
      
/* create the player */
$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        swfPath: "/js",
        supplied: "mp3",
        cssSelectorAncestor: "",
    });
      
                  jQuery('#jquery_jplayer_1').bind(jQuery.jPlayer.event.ended +'.jp-repeat', function() { 
                $('.pause').addClass('hide');
                $('.play').removeClass('hide');
                $('.main-pause').addClass('hide');
                $('.main-play').removeClass('hide');
            });

    });


/* build a list of tracks */

var tracks = { <?php 
      $idBalade = 1;
      foreach($balades as $bTab) {
          $idPastille = 1;
          foreach($bTab["mp3"] as $mp3) {                   
            echo 'b'.$idBalade.'p'.$idPastille.': "'.$mp3["fichier"].'",';
            $idPastille += 1;
          }
          $idBalade += 1;
      }
?>};
                       
var selected = "";
                       
for(var pastille in tracks) {
        $('.pause').click(function() {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').removeClass('hide');
                        $('.main-pause').addClass('hide');
                        $("#jquery_jplayer_1").jPlayer("pause");
                        $("#" + selected).css("color", "#DF3445");
        });
        $('.main-pause').click(function() {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').removeClass('hide');
                        $('.main-pause').addClass('hide');
                        $("#jquery_jplayer_1").jPlayer("pause");
                        $("#" + selected).css("color", "#DF3445");
        });
        $('#' + pastille).click(function(event) {
                        $('.pause').addClass('hide');
                        $('.play').removeClass('hide');
                        $('.main-play').addClass('hide');
                        $('.main-pause').removeClass('hide');
                        $('.entry-2buttons > span').css("display", "none");
                        if (selected == this.id) {
                                $("#jquery_jplayer_1").jPlayer("play");
                        }
                        else {
                            if (selected != "")
                                $("#" + selected).css("color", "#555555");

                            $("#jquery_jplayer_1").jPlayer("pause");
                            $("#jquery_jplayer_1").jPlayer("clearMedia");
                            $("#jquery_jplayer_1").jPlayer("setMedia", { mp3 : tracks[this.id] });
                            $("#jquery_jplayer_1").jPlayer("play");
                            $("#jquery_jplayer_1").jPlayer( "option", "cssSelector", {currentTime: "#currentTime-" + this.id} );
                            $("#jquery_jplayer_1").jPlayer( "option", "cssSelector", {duration: "#duration-" + this.id} );
                            selected = this.id;
                        }
                        $('#'+ this.id + '-pause').removeClass('hide');
                        $('#'+ this.id).addClass('hide');
                        $('#timer-' + this.id).css("display", "inline");
                        
        });
    
}

    </script>
    
    <!-- map -->
    <script>
      var mymap = L.map('main-map').setView([45.7537, 3.1136], 13);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoiam10cml2aWFsIiwiYSI6ImNpcWdwZDQwZDAwOWlpMG1jdTNob2o4dGUifQ.KClZK1URNZMMqqzP4Bbb5g', {
			maxZoom: 18,
			attribution: 'Données cartographiques &copy; contributeurs <a href="http://openstreetmap.org">OpenStreetMap</a>, ' +
				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
				'Images © <a href="http://mapbox.com">Mapbox</a>',
			id: 'mapbox.outdoors'
		}).addTo(mymap);


		campus = new L.marker([45.77506, 3.07856]).addTo(mymap)
			.bindPopup("<strong><a href=\"http://campus-clermont.net\">Radio Campus Clermont-Ferrand</a></strong><br /> Pôle 22 bis<br />22 bis impasse Bonnabaud<br />63&nbsp;000 Clermont-Ferrand");

			
			<?php 
        foreach($balades as $bTab) {
          echo $bTab["id"].' = new L.circle(['.$bTab["coordonnees"][0].', '. $bTab["coordonnees"][1].'], 200, {';
          echo "color: '#D90E22',";
          echo "fillColor: '#D90E22',";
          echo "fillOpacity: 0.5";
          echo '}).addTo(mymap).bindPopup("<strong><a href=\"/'.$bTab["id"].'\" id=\"display-'.$bTab["id"].'-map\">'.$bTab["nom"].'</a></strong><br />'.$bTab["description"].'");';
          
        }
			?>
        var group = new L.featureGroup([<?php 
        $first = true;
        foreach($balades as $bTab) {
          if (!$first)
            echo ", ";
          if ($first)
            $first = false;
          echo $bTab["id"];
        }?>]);

        mymap.fitBounds(group.getBounds());

                
                




    </script>
    
    <!-- sidebar update -->
    <script> 
          function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	
    function changeMap($selected) {
        $("[data-collapse-group='maps']:not(#" + $selected + ")").each(function () {
                    $(this).removeClass("visible").addClass('hidden');
                    });
        $("#" + $selected).removeClass("hidden").addClass('visible');
    }
    
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.content').height()
  			htmlbodyHeightUpdate()
		});
                
                $("[data-collapse-group='sidemenu']").click(function () {
                    var $this = $(this);
                    $("[data-collapse-group='sidemenu']:not([data-target='" + $this.data   ("target") + "'])").each(function () {
                    $($(this).data("target")).removeClass("in").addClass('collapse');
                    });
                });
                
                $("#display-mainmap").click(function() {
                    changeMap("main-map");
                });
                
                <?php
                  foreach($balades as $bTab) {
                    echo '$("#display-'.$bTab["id"].'").click(function() { changeMap("'.$bTab["id"].'-map");});';                  
                    echo '$("#display-'.$bTab["id"].'-map").click(function() { changeMap("'.$bTab["id"].'-map");});';                  
                  }                   
                  ?>

        });
    </script>

    
  </body>
</html>

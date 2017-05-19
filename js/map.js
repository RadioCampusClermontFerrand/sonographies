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

		glyphs = new L.circle([45.76435, 3.09272], 200, {
			color: '#D90E22',
			fillColor: '#D90E22',
			fillOpacity: 0.5
		}).addTo(mymap).bindPopup("<strong><a href=\"/glyphs\" id=\"display-glyphs-map\">La bibliothèque de Glyphs</a></strong><br />Clermont-Ferrand 2043, la ville est sous les eaux... une jeune femme retourne sur les lieux de son enfance et entraîne l’auditeur-promeneur dans sa redécouverte du quartier Saint-Jacques à travers 5 pastilles sonores.");


		rocheblanche = new L.circle([45.70160, 3.12975], 200, {
			color: '#D90E22',
			fillColor: '#D90E22',
			fillOpacity: 0.5
		}).addTo(mymap).bindPopup("<strong><a href=\"/rocheblanche\" id=\"display-rocheblanche-map\">La Roche Blanche</a></strong><br />Balade sonore dans le village&nbsp;: deux classes de l’école Jules Ferry  et 1 comédien vous emmènent en balade enregistrée, entre imaginaire et réalité, et vous racontent le territoire de façon inattendue. Venez (re)découvrir le village comme vous ne l’avez jamais entendu&nbsp;!");

				rocheblanche = new L.circle([45.78131, 3.07985], 200, {
			color: '#D90E22',
			fillColor: '#D90E22',
			fillOpacity: 0.5
		}).addTo(mymap).bindPopup("<strong><a href=\"/tiretaine\" id=\"display-tiretaine-map\">La Tiretaine</a></strong><br />Bloqué dans une dimension parallèle obscure et étrange, l’auditeur devra suivre la voix d’un guide mystérieux et ainsi faire face à quelques obstacles et épreuves. Parviendra–t-il à s’échapper et à revenir dans le monde réel ?");

                var group = new L.featureGroup([campus, glyphs, rocheblanche, tiretaine]);

                mymap.fitBounds(group.getBounds());

                
                




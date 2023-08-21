<title>Sebaya-App | {{$title}}</title>
@extends('partials.header')

@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <li>Peta Rekreasi Sentimen Positif</li>
    </ol>
    <h2>Peta Rekreasi Sentimen Positif</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
          <div class="card" style="width: 17rem;">
              <div class="card-header">
                Warna Marker
              </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><img src="front/img/marker/marker_blue.webp" height="30"width="30"> History</li>
              <li class="list-group-item"><img src="front/img/marker/marker_orange.webp" height="30"width="25"> Museum</li>
              <li class="list-group-item"><img src="front/img/marker/marker_black.webp" height="30"width="25"> Religi</li>
              <li class="list-group-item"><img src="front/img/marker/marker_pink.webp" height="30"width="25"> Monumen & Landmark</li>
              <li class="list-group-item"><img src="front/img/marker/marker_dkblue.webp" height="30"width="25"> Outdoor and Nature</li>
              <li class="list-group-item"><img src="front/img/marker/marker_red.webp" height="30"width="25"> Kampung Wisata</li>
              <li class="list-group-item"><img src="front/img/marker/marker_lime.webp" height="30"width="25"> Pusat Perbelanjaan</li>
              <li class="list-group-item"><img src="front/img/marker/marker_purple.webp" height="30"width="25"> Pasar Tradisional</li>
              <li class="list-group-item"><img src="front/img/marker/marker_green.webp" height="30"width="25"> Art & Culture</li>
              <li class="list-group-item"><img src="front/img/marker/marker_grey.webp" height="30"width="25"> Sport</li>
              <li class="list-group-item"><img src="front/img/marker/marker_dkgrey.webp" height="30"width="25"> Kuliner</li>
              <li class="list-group-item"><img src="front/img/marker/marker_yellow.webp" height="30"width="25"> Mice</li>
              <li class="list-group-item"><img src="front/img/marker/family_icon.webp" height="30"width="25"> Family Activities</li>
              <li class="list-group-item"><img src="front/img/marker/welness.webp" height="30"width="25"> SPA & Wellness</li>
            </ul>
          </div>
      </div>  
      <div class="col-md-9">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

  <!-- leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="crossorigin=""></script>

  <!-- Leaflet Vanilla JS -->
  <script>

      /*===================================================
                            OSM  LAYER               
      ===================================================*/
      var map = L.map('map').setView([-7.245383317798462, 112.73877832551757], 12);
      var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      });
      osm.addTo(map);

      /*===================================================
                          TILE LAYER               
      ===================================================*/

      var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        maxZoom: 19
      });
      CartoDB_DarkMatter.addTo(map);

      /*===================================================
                          GOOGLEMAPS LAYER               
      ===================================================*/

      googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
          maxZoom: 20,
          subdomains:['mt0','mt1','mt2','mt3']
      });
      googleStreets.addTo(map);

      // Satelite Layer
      googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
      });
      googleSat.addTo(map);

      /*===================================================
                     STAMEN LAYER               
      ===================================================*/
      
      var Stamen_Watercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
      attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      subdomains: 'abcd',
      minZoom: 1,
      maxZoom: 16,
      ext: 'jpg'
      });
      Stamen_Watercolor.addTo(map);

      /*===================================================
                      LAYER CONTROL               
      ===================================================*/

      var baseLayers = {
          "Google Satellite":googleSat,
          "Google Street":googleStreets,
          "Water Color":Stamen_Watercolor,
          // "OpenStreetMap": osm
      };

      L.control.layers(baseLayers).addTo(map);

    // //History and Heritage  
    // var pelabuhanrakyatkalimas = L.marker([-7.200714477824853, 112.7354013418574]).bindPopup('Nama Obyek Wisata : Pelabuhan Rakyat Kalimas'),masjidmuhammadchenghoo = L.marker([-7.2517978635279885, 112.74683205535217]).bindPopup('Nama Obyek Wisata : Masjid Muhammad Cheng Hoo');
    
    // //Museum
    // var museumpendidikandokter = L.marker([-7.265307811644272, 112.75972756884681]).bindPopup('Nama Obyek Wisata : Museum Pendidikan Dokter'),monumenkapalselam = L.marker([-7.265494250905332, 112.75026228234131]).bindPopup('Nama Obyek Wisata : Monumen Kapal Selam');

    // // //Religion
    // var masjidnasionalalakbar = L.marker([-7.336422556671241, 112.7152020553528]).bindPopup('Nama Obyek Wisata : Masjid Agung Nasional Al-Akbar'),gerejagrahabethany = L.marker([-7.306774985664184, 112.77239881117677]).bindPopup('Nama Obyek Wisata : Masjid Agung Nasional Al-Akbar');

    // // //Culinary
    // var swkpenjaringansari = L.marker([-7.287216735597925, 112.73108471117655]).bindPopup('Nama Obyek Wisata : SWK Penjaringansari'),loopgrahafestival = L.marker([-7.320316449757917, 112.73254809768233]).bindPopup('Nama Obyek Wisata : LOOP Graha Festival');
    
    // // //sport 
    // var gelorapancasila = L.marker([-7.287216735597925, 112.73108471117655]).bindPopup('Nama Obyek Wisata : Gelora Pancasila'),dblarena = L.marker([-7.320316449757917, 112.73254809768233]).bindPopup('Nama Obyek Wisata :DBL Arena');

    // var history = L.layerGroup([pelabuhanrakyatkalimas, masjidmuhammadchenghoo]);
    // var museum = L.layerGroup([museumpendidikandokter, monumenkapalselam]);
    // var religion = L.layerGroup([masjidnasionalalakbar, gerejagrahabethany]);
    // var culinary = L.layerGroup([swkpenjaringansari, loopgrahafestival]);
    // var sport = L.layerGroup([gelorapancasila, dblarena]);

    //   var overlayMaps = {
    //     "History & Heritage": history
    //   };

    //   var baseLayers = {
    //     "OSM": osm
    //   };

    //   L.control.layers(baseLayers, overlayMaps, {
    //     collapsed: true
    //   }).addTo(map);

    //   layerControl.addOverlay("Museum",museum);

  </script>
@endsection
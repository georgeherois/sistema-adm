@extends('adminlte::page', ['iFrameEnabled' => false])

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mapa</h1>
@stop

@section('content')



<body>
  <div id="container">
      <div id="header">
  
        <title>Map</title>
        <style>
            #map {
                height: 400px;
                width: 100%;
            }
        </style>
  
      </div>

      <div id="map"></div>

   
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6x6_OlGXFc24EiojzRGiwBAOCQazhYVk"></script>

  <script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -12.9715987, lng: -38.5018418},
            zoom: 12
        });

        var locations = [
            {lat: -12.979194, lng: -38.508667, name: 'Farol da Barra - Salvador'},
            {lat: -12.973929, lng: -38.512385, name: 'Pelourinho - Salvador'},
            {lat: -12.964943, lng: -38.513118, name: 'Mercado Modelo - Salvador'},
            {lat: -12.936624, lng: -38.376736, name: 'Praia do Flamengo - Salvador'},
            {lat: -12.981237, lng: -38.504555, name: 'Arena Fonte Nova - Salvador'},
            {lat: -12.970381, lng: -38.511327, name: 'Elevador Lacerda - Salvador'},
            {lat: -13.005905, lng: -38.531441, name: 'Praia do Porto da Barra - Salvador'},
            {lat: -12.919947, lng: -38.419129, name: 'Parque Metropolitano de Pituaçu - Salvador'},
            {lat: -12.982573, lng: -38.472581, name: 'Teatro Castro Alves - Salvador'},
            {lat: -12.967686, lng: -38.513988, name: 'Museu de Arte Moderna da Bahia - Salvador'},
            {lat: -12.970759, lng: -38.508643, name: 'Parque da Cidade - Salvador'},
            {lat: -12.564207, lng: -41.413555, name: 'Praia do Forte - Mata de São João'},
            {lat: -12.911408, lng: -38.331205, name: 'Aeroporto Internacional de Salvador - Salvador'}
        ];
        
        for (var i = 0; i < locations.length; i++) {
            var location = locations[i];
            var marker = new google.maps.Marker({
                position: {lat: location.lat, lng: location.lng},
                map: map,
                title: location.name
            });
        }
    }
    initMap();
</script>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
      <!-- arquivos style -->
  <link href="http://localhost/adm/public/vendor/adminlte/dist/css/style.css" rel="stylesheet">
  <link href="http://localhost/adm/public/vendor/adminlte/dist/css/darkMode.css" rel="stylesheet">
@stop

@section('js')
  <script> console.log('Hi!'); </script>    
  <script src="http://localhost/adm/public/vendor/adminlte/dist/js/darkMode.js"></script>
  <script src="http://localhost/adm/public/vendor/adminlte/dist/js/main.js"></script>
@stop
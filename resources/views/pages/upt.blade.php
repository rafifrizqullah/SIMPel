@extends('layouts.app')

@section('title', 'Pos Indonesia - Lokasi Regional')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-3">Lokasi Unit Pelaksana Teknis</h1>
					<div id="map"></div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	// Initialize and add the map
	function initMap() {
		// The location of Uluru
		var locations = [
			['Regional 1 Medan', 3.595733, 98.684246, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 2 Padang', -0.907093, 100.352193, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 3 Palembang', -2.981376, 104.745649, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 4 Jakarta', -6.167431, 106.835161, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 5 Bandung', -6.894023, 107.634532, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 6 Semarang', -7.014934, 110.423983, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 7 Surabaya', -7.235923, 112.734074, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 8 Denpasar', -8.666576, 115.231517, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 9 Banjarbaru', -3.440981, 114.831636, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 10 Makassar', -5.164130, 119.434747, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"],
			['Regional 11 Jayapura', -2.522577, 140.713324, "<table border='1' class='table table-hovered table-bordered table-stripped'><tr><th>Uraian</th><th>Pemerintah</th><th>Swasta</th></tr><tr style='font-weight:bold'><td >SATKER/BLK/LPKS/BLK Komunitas</td><td style='text-align:center'>19 </td><td style='text-align:center'>272 </td></tr><tr style='font-weight:bold'><td> Instruktur</td><td style='text-align:center'>207  </td><td style='text-align:center'>490  </td></tr><tr style='font-weight:bold'><td> Tenaga Pelatihan</td><td style='text-align:center'>21  </td><td style='text-align:center'>519  </td></tr></table>"]
		];
		// The map, centered at Uluru
		var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 4, center: new google.maps.LatLng(-1.992959, 121.281986)});
			// The marker, positioned at Uluru
			
			var infowindow = new google.maps.InfoWindow();
			var marker, i;

			for (i = 0; i < locations.length; i++) {  
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				map: map
			});

			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));

			/*
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][3]);
					infowindow.open(map, marker);
				}
			})(marker, i));
			*/

			google.maps.event.addListener(marker, "click", (function (marker, i) {
				//Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
				return function () {
					infowindow.setContent("<div style = 'width:320px;min-height:40px'> <h3>  " + locations[i][0] + "</h3>"+ locations[i][3] +"</div>");
					infowindow.open(map, marker);
				}
							})(marker, i));
		}
	}
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIpomF9PalHOTMQC2fIgYi7qa-hLseRf8&callback=initMap">
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
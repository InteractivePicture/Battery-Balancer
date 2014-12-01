<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Slider - Vertical slider</title>
<link rel="stylesheet" href="jquery-ui-1.11.2.custom/jquery-ui.css">
<script src="jquery-ui-1.11.2.custom/jquery-1.10.2.js"></script>
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>

<script>
$(function() {

	$( "#slider-vertical1" ).slider({
		orientation: "vertical",
		range: "min",
		min: 0,
		max: 100,
		value: 60,
		slide: function( event, ui ) {
			$( "#amount1" ).val( ui.value );
		}
	});
	$( "#amount1" ).val( $( "#slider-vertical1" ).slider( "value" ) );
	
	$( "#slider-vertical2" ).slider({
		orientation: "vertical",
		range: "min",
		min: 0,
		max: 100,
		value: 60,
		slide: function( event, ui ) {
			$( "#amount2" ).val( ui.value );
		}
	});
	$( "#amount2" ).val( $( "#slider-vertical2" ).slider( "value" ) );

});

</script>

</head>
<body>
<p>
<label for="amount">Volume:</label>
<input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;">
<label for="amount">Volume:</label>
<input type="text" id="amount2" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
<div id="slider-vertical1" style="height:200px;"></div>
<div id="slider-vertical2" style="height:200px;"></div>

<img src="images/overview.jpg" width="636" height="1013">

</body>
</html>

<?php

// probeer dit http://jsfiddle.net/vNf9K/1/

?>
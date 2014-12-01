<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Draggable - Constrain movement</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<script src="jquery-ui-1.11.2.custom/jquery-1.10.2.js"></script>
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>
<script src="iap_plugins/TouchPunch.js"></script>
<style>

#status {
	position:absolute;
	left:10px;
	top:800px;
	height: 200px;
	width: 300px;
	border: 1px solid #000;
	background: #ccc;
	text-align: left;
}

.draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }

#dragbattery1 { cursor: pointer; }
#containment1 { width: 200px; height:250px; border:2px solid #ccc; padding: 10px; }

#dragbattery2 { cursor: pointer; }
#containment2 { width: 200px; height:250px; border:2px solid #ccc; padding: 10px; }

</style>

</head>
<body>

	<div id="status"></div>

    <div id="containment1">
        <div id="dragbattery1" class="draggable ui-widget-content">
            <p>Battery</p>
        </div>
	</div>
    
    <div id="containment2">
        <div id="dragbattery2" class="draggable ui-widget-content">
            <p>Battery</p>
        </div>
	</div>
    
</body>

<script>

	$(function() {
		
		$(document).mousemove(function(e) {  
			$("#status").html("Battery : "+ $("#dragbattery1").css("top"));
		});
		
		/*	
		$( "#draggable" ).draggable({ axis: "y" });
		$( "#draggable2" ).draggable({ axis: "x" });
		*/
		$( "#dragbattery1" ).draggable({ containment: "#containment1", scroll: false });
		$( "#dragbattery2" ).draggable({ containment: "#containment2", scroll: false });
	
	});
</script>

</html>
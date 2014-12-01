<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Victron Energy - Battery Balancer</title>
<!--
<link rel="stylesheet" href="styles.css">
-->
<link rel="stylesheet" href="jquery-ui-1.11.2.custom/smoothness/jquery-ui.css">

<script src="jquery-ui-1.11.2.custom/jquery-1.10.2.js"></script>
<script src="jquery-ui-1.11.2.custom/jquery-ui.js"></script>

<style>
#overlay {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 1080px;
	height: 1800px;
	/* border: 1px solid #f00; */
}

body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	background-color: #ddd;
}
#knoppen {
	position: absolute;
	top: 548px;
	left: 853px;
	width: 100px;
	height: 207px;
	overflow:hidden;
}
#alarm {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 200px;
	height: 100px;
	cursor: pointer;
	background-image: url(images/BB_components_01.png);
}
#reset {
	position: absolute;
	top: 107px;
	left: 0px;
	width: 200px;
	height: 100px;
	cursor: pointer;
	background-image: url(images/BB_components_03.png);
}
#progreset {
	position: absolute;
	top: 1830px;
	left: 30px;
	width: 76px;
	height: 78px;
	cursor: pointer;
	background-image: url(images/progreset.jpg);
}
#progplay {
	position: absolute;
	top: 1830px;
	left: 110px;
	width: 76px;
	height: 78px;
	cursor: pointer;
	background-image: url(images/progplay.jpg);
}
#progquit {
	position: absolute;
	top: 1830px;
	left: 980px;
	width: 76px;
	height: 78px;
	cursor: pointer;
	background-image: url(images/progquit.jpg);
}

#container{
	position: absolute;
	top: 110px;
	left: 0px;
	width: 1080px;
	height: 1920px;
}
#backimage1 {
	position: absolute;
	margin: 0px;
	padding: 0px;
	top: 0px;
	left: 0px;
	width: 1080px;
	height: 1920px;
	background-image: url(images/layout_10.jpg);

}
#backimage2 {
	position: absolute;
	margin: 0px;
	padding: 0px;
	top: 0px;
	left: 0px;
	width: 1080px;
	height: 1920px;
	background-image: url(images/StartScherm.jpg);

}
#start {
	position: absolute;
	top: 1400px;
	left: 380px;
	width: 300px;
	height: 113px;
	cursor: pointer;
	background-image: url(images/Start.png);
}
/* alarm */
#DoBalance{
	position: absolute;
	top: 50px;
	left: 0px;
	width: 1080px;
	height: 50px;
	font-size: 42px;
	font-weight: bold;
	text-align: center;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #fff;
}
#BatteryBalancer{ 
	position:absolute;
	top: 140px;
	left: 306px;
	/*
	width: <?php $schaalbat=0.73; $a=630*$schaalbat; echo $a; ?>px;
	height: <?php  echo $a*0.873; ?>px;
	*/
	width: 461px;
	height: 402px;
	/* border: 1px solid #f00; */
}
.led {
	position:absolute;
	width:<?php $a=30*$schaalbat; echo $a; ?>px;
	height:<?php $a=44*$schaalbat; echo $a; ?>px;
}
#midpoint {
	position: absolute;
	top: 160px;
	left: 540px;
	width: 200px;
	height: 50px;
	color: #ff0;
	font-size: 25px;
	text-align: left;
	overflow: visible;
	/* border: 1px solid #f00;  */
	background-image: url(images/midpoint.png);
	background-attachment: scroll;
	background-repeat: no-repeat;
	background-position: right top;
}
#delta_midpoint {
	position: absolute;
	top:-20px;
	width: 200px;
	height: 50px;
	border: 1px solid #f00;
}

#midpoint_verschil {
	position: absolute;
	top: 160px;
	left: 1101px;
	width: 450px;
	height: 20px;
	font-size: 14px;
	text-align: center;
	
}
/*
#midpoint_visual {
	position: absolute;
	top: 250px;
	left: 1265px;
	width: 120px;
	height: 20px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
*/
.draggable1 { 
	width: 110px; 
	height: 276px; 
	background-image: url(images/left.png);
}
.draggable2 { 
	width: 110px; 
	height: 276px; 
	background-image: url(images/right.png);
}
#battery1,#battery2 { 
	cursor: pointer;

}
#batspan1 {
	position: absolute;
	top:30px;
	left:152px;
	width:392px;
	height:92px;
	overflow:hidden;
	/* border:1px solid #00f; */
}
#batspan1 p {
	color: #000;
	font-size: 40px;
	text-align: right;
	margin-top: 20px;
	margin-right: 10px;
	margin-bottom: 0px;
	margin-left: 0px;	
	
	/* border:1px solid #00f; */
}
#batspan2 {
	position: absolute;
	top:30px;
	left:-420px;
	width:392px;
	height:92px;
	overflow:visible;
	
	/* border:1px solid #00f; */
}
#batspan2 p {
	color: #000;
	font-size: 40px;
	text-align: right;
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 10px;	
	
	/* border:1px solid #00f; */
}
#batback1 {
	position: absolute;
	top: 30px;
	left: 155px;
	width: 388px;
	height: 92px;
	overflow:hidden;
}
#batback2 {
	position: absolute;
	top: 30px;
	left:-420px;
	width: 392px;
	height: 92px;
	overflow:hidden;
}
#indicatie1 {
	position: absolute;
	top: -190px;
	left: 0px;
	width: 394px;
	height: 276px;
	background-image: url(images/indicatie_left.jpg);
}
#indicatie2 {
	position: absolute;
	top: -190px;
	left: 0px;
	width: 394px;
	height: 276px;
	background-image: url(images/indicatie_right.jpg);
}
#containment1 {
	position: absolute;
	left:0px;
	top: 700px;
	width: 110px;
	height: 600px;
}
#containment2 {
	position: absolute;
	left:970px;
	top: 700px;
	width: 110px;
	height: 600px;
}
#container #containment1 #battery1 p, #container #containment2 #battery2 p {
	text-align: center;

}
.dot {
	position: absolute;
	width: 10px;
	height: 10px;
}
#Currents {
	position: absolute;
	width:1080px;
	height:1920px;
	width:10px;
	height:10px;
	top: 0px;	
	left:0px;
	/* border: 1px solid #00f; */
}
#status {
	position: absolute;
	top: 300px;	
	width:100px;
	height:100px;
	border: 1px solid #000;
}

#battery_level {
	position: absolute;
	top: 950px;
	left: 320px;
	width: 450px;
	height: 50px;
	font-size: 50px;
	font-weight: bold;
	text-align: center;
	color: #fff;
	/* background-color: #0c0; */
}
#battery_level_draggeble {
	position: absolute;
	cursor: pointer;
	/* top: -100px; */
	left: 320px;
	width: 450px;
	height: 70px;
	/* border: 1px solid #f00;   */
}
#battery_level_container {
	position: absolute;
	top:1400px;
	height: 500px;
	left: 320px;
	width: 450px;
	/* border: 1px solid #f00; */
}

</style>
</head>
<body>


<div id="pagina1">

    <div id="backimage1"></div>
    <div id="container">
        <div id="battery_level_container"></div>
      <div id="battery_system">
        
        
        </div>
        <div id="battery_level"></div>
      
        
        <div id="containment1">
            <div id="battery1" class="draggable1 ui-widget-content">
            
                <div id="batback1"><div id="indicatie1"></div></div>
                <div id="batspan1"></div>
                    
                
          </div>
        </div>
           
      <div id="containment2">
            <div id="battery2" class="draggable2 ui-widget-content">
    
                <div id="batback2"><div id="indicatie2"></div></div>			
                <div id="batspan2"></div>
            </div>
        </div>
       
        <div id="midpoint">
        
        </div>
        <!--
        <div id="midpoint_verschil"></div>
        
        <div id="midpoint_visual"></div>
        -->
    </div>
    
    
    
    <div id="BatteryBalancer">
        <div id="led1" class="led" style="top:44.5%; left:83%"><img src="images/led1.jpg" width="100%" height="100%"></div> 
        <div id="led2" class="led" style="top:52%; left:83%"><img src="images/led2.jpg" width="100%" height="100%"></div>
        <div id="led3" class="led" style="top:61%; left:83%"><img src="images/led3.jpg" width="100%" height="100%"></div>
        <div id="led4" class="led" style="top:68.5%; left:83%"><img src="images/led4.jpg" width="100%" height="100%"></div>
    </div>
    
    <div id="Currents">
        <div id="Cur1">
            <div id="Cur1_1"></div><div id="Cur1_2"></div><div id="Cur1_3"></div>
        </div>
        <div id="Cur2">
            <div id="Cur2_1"></div><div id="Cur2_2"></div><div id="Cur2_3"></div>
        </div>
    </div>
    
    <div id="DoBalance">Do Balance</div>
    
    <div id="knoppen">
        <div id="alarm"></div>
        <div id="reset"></div>
    </div>
    
    
    
    <!--
     <div id="status"></div>
    -->
    
    <div id="battery_level_draggeble"></div>
    
    <div id="progreset"></div>
    <div id="progplay"></div>
    <div id="progquit"></div>
    
    <div id="overlay"></div>
    
</div>

<div id="pagina2">

    <div id="backimage2"></div>
    <div id="start"></div>
    
    
</div>
 
<script type="text/javascript">
var firsttime = true;

var balancer = false;
var alarm = false;

var vorig = 0;
var sprong = 2

var teller1 = 0;
var teller2 = 0;
var hoogte1 = 0;
var hoogte2 = 0;
var pixels1 = 0;
var pixels2 = 0;

var grondslag = 13;
var spreiding = 1.5;

var max_spanning = grondslag + spreiding;

var spanning1 = 0;
var spanning2 = 0;

var ruimte = 0;

var aantalStappen = 45;
var stap = 0;

var totalMove = false;
var aanslag_boven = false;
var aanslag_onder = false;

// Eerst uitvoeren
$("#battery1").draggable({ containment: "#containment1", scroll: false });
$("#battery2").draggable({ containment: "#containment2", scroll: false });

$("#battery_level_draggeble").draggable({ containment: "#battery_level_container", scroll: false });


$("#Cur1").hide();
$("#Cur2").hide();
$("#DoBalance").hide();




ToonStatus();
	
var eindwaarde = 0;//0.4 * ruimte; 
var startwaarde = 0.67 * ruimte;
// Dit is de helft van de schaal! halve hoogte

$("#battery1").css("top",startwaarde+"px");
$("#battery2").css("top",startwaarde+"px");

$("#led1").hide();
$("#led2").hide();
$("#led3").hide();
$("#led4").hide();


var totaalafstand = 0;
 

$(function() {
	
	$(document).mousemove(function(e) {  
		ToonStatus();
	});

	$(document).mouseup(function(e) { 
 		totalMove = false;
		if (stap == 0) {  Start(); }

	});
	
	$("#battery_level_draggeble").mousedown(function(e) { 

		totalMove = true;

	});
	
	function Start() {
		
		if (balancer && Math.abs(midpoint) > 0.1) {
		
		teller1 = parseInt($("#battery1").css("top"));
		teller2 = parseInt($("#battery2").css("top"));
		
		eindwaarde = Math.abs((teller1+teller2)/2);
		
		stapgrootte1 = Math.abs(eindwaarde-parseInt($("#battery1").css("top")))/aantalStappen;
		stapgrootte2 = Math.abs(eindwaarde-parseInt($("#battery2").css("top")))/aantalStappen;
		
		// Voorwaarden
		// spaning groter dan 27,30 V EN
		// Midvolt spanningsvershil groter dan 0,10 V
		
		$("#overlay").show();
		DoBalance();
		
		}
	}
});

function DoBalance() {

	stap++;

	hoogte1 = parseInt($("#battery1").css("top"));
	hoogte2 = parseInt($("#battery2").css("top"));

	// Move the batteries
	if ( hoogte1 < eindwaarde ) {
		teller1 = teller1 + stapgrootte1;
 
	} else {
		teller1 = teller1 - stapgrootte1;
 	
	}
	if ( hoogte2 < eindwaarde ) {
		teller2 = teller2 + stapgrootte2;
 	
	} else {
		teller2 = teller2 - stapgrootte2;

	}
	
	$("#battery1").css("top",teller1+"px");
	$("#battery2").css("top",teller2+"px");
	
	// Altijd dezelfde hoeveelheid stappen naar balance

	if ( stap < aantalStappen ) {
			 
				if (hoogte1 < hoogte2) { $("#Cur1").show(); } else { $("#Cur2").show(); }
	 
			setTimeout(DoBalance,40);
		
	} else {
		$("#Cur1").hide(); $("#Cur2").hide(); stap = 0; $("#overlay").hide();
	}

	ToonStatus();
	
}

function ToonStatus() {
	
	ruimte =  parseInt($("#containment1").css("height")) -  parseInt($("#battery1").css("height")) - 2;
	
	hoogte1 = parseInt($("#battery1").css("top"));
	hoogte2 = parseInt($("#battery2").css("top"));
	
	spanning1 = (((ruimte-hoogte1)/ruimte) * spreiding) + grondslag;
	spanning2 = (((ruimte-hoogte2)/ruimte) * spreiding) + grondslag;

	
	if (spanning1 > max_spanning || spanning2 > max_spanning) {
		aanslag_boven = true;
		if (spanning1 >= spanning2) {
			if (spanning1 == spanning2) { spanning2 = max_spanning };
			spanning1 = max_spanning; 
		} else { spanning2 = max_spanning }
	}
	
	else if (spanning1 < grondslag || spanning2 < grondslag) {
		aanslag_onder = true;
		if (spanning1 <= spanning2) { 
			if (spanning1 == spanning2) { spanning2 = grondslag }; 
			spanning1 = grondslag; 
		} else { spanning2 = grondslag }
	} else {
		aanslag_boven = false;
		aanslag_onder = false;
	}
	
	spanning_totaal = spanning1 + spanning2;
	$("#battery_level").css("top", 2170 - 20*spanning_totaal+"px");

	midpoint_verschil = ( spanning2 + spanning1 )/2;
	
	$("#batspan1").html("<P><strong>"+spanning1.toFixed(2) +" V</strong></p>");
	$("#batspan2").html("<P><strong>"+spanning2.toFixed(2) +" V</strong></p>");
	
	/* $("#battery_system").html("Battery System Voltage"); */
	$("#battery_level").html(spanning_totaal.toFixed(1)+" V");
	
	if (totalMove && vorig > $("#battery_level_draggeble").css("top")) {

		// Just pushdown or pushup!
 		aanslag_onder = false;
		if (!aanslag_boven) {
			
			$("#battery1").css("top",hoogte1 - sprong +"px");
			$("#battery2").css("top",hoogte2 - sprong +"px");
		}
	
	} else if (totalMove && vorig < $("#battery_level_draggeble").css("top")) {
		aanslag_boven = false;

		if (!aanslag_onder) {

			$("#battery1").css("top",hoogte1 + sprong +"px");
			$("#battery2").css("top",hoogte2 + sprong +"px");
		}
	} else {
		
		$("#battery_level_draggeble").css("top", -1+100+parseInt($("#battery_level").css("top"))+"px"); // + 100 !!!!
	}
	vorig = $("#battery_level_draggeble").css("top");
	
	hoogte_midpoint = 10 + parseInt($("#containment1").css("top"));

	
	if (spanning_totaal > 27.3 && !balancer) {
		balancer = true;
		$("#led1").show();		
	} else if (spanning_totaal > 26.6 && balancer) {
		$("#led1").show();		
	} else {
		balancer = false;
		$("#led1").hide();
		$("#led2").hide();
		$("#led3").hide();
		$("#led4").hide();
		/*
		$("#containment1").css("background-color","#ccc");
		$("#containment2").css("background-color","#ccc");
		*/
		$("#indicatie1").css("top","-190px");
		$("#indicatie2").css("top","-190px");
	}

	
	if (balancer || firsttime) { firsttime = false;
	// ---------------------------------------------
		if (hoogte1 == hoogte2) {
			midpoint = 0;
			
			$("#midpoint").hide();
			// $("#midpoint_visual").css("top",hoogte2+ hoogte_midpoint).css("border-left-style","solid").css("border-right-style","none");
			$("#midpoint_verschil").css("top",hoogte2-40+hoogte_midpoint+"px");		
		
		} else if (hoogte1 > hoogte2) {
			// Linkerkant is hoger
			midpoint = spanning1 - midpoint_verschil;
			
			if (Math.abs(midpoint) >= 0.1) {
					$("#led2").show();
					$("#led3").hide();
					
					if (Math.abs(midpoint) >= 0.2) {
						Alarm(1);
						/*
						$("#containment1").css("background-color","#ccc");
						$("#containment2").css("background-color","#f00");
						*/
						$("#indicatie1").css("top","-190px");
						$("#indicatie2").css("top","-5px");
	
			
					} else {
						/*
						$("#containment1").css("background-color","#ccc");
						$("#containment2").css("background-color","#ffa700");
						*/
						$("#indicatie1").css("top","-190px");
						$("#indicatie2").css("top","-98px");
						
					}
			} else {
				
				$("#led2").hide(); $("#led3").hide(); Alarm(0);		
				/*		
				$("#containment1").css("background-color","#ccc");
				$("#containment2").css("background-color","#ccc");	
				*/
				$("#indicatie1").css("top","-190px");
				$("#indicatie2").css("top","-190px");
			}
	
			
			// $("#midpoint_visual").css("top",hoogte2+ hoogte_midpoint).css("border-left-style","solid").css("border-right-style","none");
			$("#midpoint_verschil").css("top",hoogte2-40+hoogte_midpoint+"px");
			$("#midpoint").css("top",hoogte2-15+hoogte_midpoint+"px").css("left","565px").css("text-align","right").css("background-position","left top").show();
	
		} else {
			midpoint = spanning2 - midpoint_verschil;
			
			if (Math.abs(midpoint) >= 0.1) {
					$("#led2").hide();
					$("#led3").show();
					
					if (Math.abs(midpoint) >= 0.2) {
						Alarm(1);
						/*
						$("#containment1").css("background-color","#f00");
						$("#containment2").css("background-color","#ccc");
						*/
						$("#indicatie1").css("top","-5px");
						$("#indicatie2").css("top","-190px");
						
					} else {
						/*
						$("#containment1").css("background-color","#ffa700");
						$("#containment2").css("background-color","#ccc");
						*/
						$("#indicatie1").css("top","-98px");
						$("#indicatie2").css("top","-190px");
					}
			} else {
				
				$("#led2").hide(); $("#led3").hide(); Alarm(0);	
				/*				
				$("#containment1").css("background-color","#ccc");
				$("#containment2").css("background-color","#ccc");	
				*/
				$("#indicatie1").css("top","-190px");
				$("#indicatie2").css("top","-190px");
			}
			
			// $("#midpoint_visual").css("top",hoogte1+ hoogte_midpoint).css("border-left-style","none").css("border-right-style","solid");
			$("#midpoint_verschil").css("top",hoogte1-40+hoogte_midpoint+"px");
			$("#midpoint").css("top",hoogte1-15+hoogte_midpoint+"px").css("left","330px").css("text-align","left").css("background-position","right top").show();
		}
	// ---------------------------------------------
	} else {
		
		if (hoogte1 == hoogte2) {
			midpoint = 0;
			
			$("#midpoint").hide();
			// $("#midpoint_visual").css("top",hoogte2+ hoogte_midpoint).css("border-left-style","solid").css("border-right-style","none");
			$("#midpoint_verschil").css("top",hoogte2-40+hoogte_midpoint+"px");		
		
		} else if (hoogte1 > hoogte2) {
			// Linkerkant is hoger
			midpoint = spanning1 - midpoint_verschil;
			
			$("#midpoint_verschil").css("top",hoogte1-40+hoogte_midpoint+"px");
			$("#midpoint").css("top",hoogte1-15+hoogte_midpoint+"px").css("left","330px").css("text-align","left").css("background-position","right top").show();
		} else {
			// Linkerkant is hoger
			midpoint = spanning2 - midpoint_verschil;
			
			$("#midpoint_verschil").css("top",hoogte1-40+hoogte_midpoint+"px");
			$("#midpoint").css("top",hoogte1-15+hoogte_midpoint+"px").css("left","330px").css("text-align","left").css("background-position","right top").show();
		}
	
	}

	$("#midpoint_verschil").html("Midpoint<br><strong>"+Math.abs(midpoint_verschil.toFixed(2))+" V</strong>");
	$("#midpoint").html("<strong>"+Math.abs(midpoint.toFixed(2))+"V </strong>");
	// $("#midpoint_visual").css("height",Math.abs(hoogte1-hoogte2))
	

	if (spanning_totaal > 27.3 && Math.abs(midpoint) >= 0.2 && !alarm) {
		alarm = true; // vanwege hystere
 		Alarm(1);
 
	} else if (Math.abs(midpoint) >= 0.14 && alarm) {
  		Alarm(1);
	} else {
		alarm = false;
		Alarm(0);		
	}

	if (spanning_totaal > 27.3 && Math.abs(midpoint) >= 0.1) {
		$("#DoBalance").show();
	} else {
		$("#DoBalance").hide();
	}
	
	
		
}


function Alarm(aan) {
	if (aan) {
		$("#led4").show();
		$("#reset").css("left","-100px");
		$("#alarm").css("left","-100px");
	} else {
		$("#led4").hide();
		$("#reset").css("left","0px");
		$("#alarm").css("left","0px");		
	}
}
ToonStatus();
balancer = false;
$("#led1").hide();
$("#midpoint").hide();
$("#overlay").hide();
$("#pagina2").hide();

$( "#start" ).mouseup(function() {
	$("#pagina2").hide();
});

$( "#progreset" ).mouseup(function() {
	location.reload()
});

$( "#progquit" ).mouseup(function() {
	$("#pagina2").show();
});

/*
#progplay {
#progquit {
*/



//--------------------------------------------------------------------------------------------------------- Hub 1

function Rood_hub1 (plus) {
	Rood0_hub1.change_current(plus);
}
function Blauw_hub1 (plus) {
	Links_Rood.change_current(plus);
	Rechts_Rood.change_current(plus);
}
function Wit_hub1 (plus) {
	Wit0_hub1.change_current(plus);
	Wit1_hub1.change_current(plus);
	Wit2_hub1.change_current(plus);
}

function Stroming_hub1(stroom,lijst,constant,kleur,stroomsterkte) {
		
	this.stroom = stroom;
	this.lijst = lijst;
	this.constant = constant; 
 	this.kleur = kleur;	
	this.stroomsterkte = stroomsterkte;

	this.change_current = change_current;

	var aantalstappen = 0;
	
	var aantalDots = 0;
	var totaal = 0;	
	var aantalnods = 1;
	var start = 0;
 	var NewPoint = 0;
	
	var current,
		rev,
		hoeveel,
		start_iap_Animate,
		x_pos,
		y_pos,
		hoek,graden,
		x_stappen,
		y_stappen,
		x_stap,
		y_stap;
	
	if (stroomsterkte < 0) { rev = 1; } else { rev = 0; }
	current = Math.abs(stroomsterkte);
	
	var stapgrootte = Math.round( 5 + (10/current));  
	// 5 - 15
	var	snelheid = Math.round( 50 + (150/current)); 
	// 50 - 200
	
	Welke_Stroom();
	
	var mouseX;
	var mouseY;
	/*
	$("#Currents").mousemove( function(e) {
	   mouseX = e.pageX; 
	   mouseY = e.pageY;
	   
	}); 
	
	$("#Currents").mousedown(function(){
		string = mouseX+','+mouseY+'#';
		res = string.split(',#');
		$('#status').html(res+'<br>');   
	});
	*/
	NextPoint(0);
	Plot();
	
	function change_current(plus) {
		
		clearInterval(start_iap_Animate);
		
		for (aantal=start; aantal<aantalDots; aantal = aantal+stapgrootte) {
				
			$("#"+stroom+"dot"+aantal).hide();
		}
		
		if (plus) { stroomsterkte++; } else { stroomsterkte--; }
		
		Welke_Stroom();
		
		iap_Animate()
	}
	
	function Welke_Stroom() {
		
		if (stroomsterkte<0) { rev = 1;} else { rev = 0;}
		
		if (stroomsterkte>10) { stroomsterkte = 10;}
		if (stroomsterkte<-10) { stroomsterkte = -10;}
		
		current = Math.abs( stroomsterkte );
		if (current == 0) { stapgrootte = 100; snelheid = 10000; } else {
			stapgrootte = Math.round( 5 + (10/current));  
			snelheid = Math.round( 50 + (150/current)); 	
		}
		
		start = 0;
		if (rev) {	$('#waarde'+kleur).html('-'); } else { $('#waarde'+kleur).html(''); }
		if (current == 10) {
			$('#waarde'+kleur).append('max');
		} else {
			$('#waarde'+kleur).append(current);
		}
		
		
	}
	
	function iap_Animate() {
		
		var vanaf;
		
		start_iap_Animate = setInterval(function(){ 

			for (aantal=start; aantal<aantalDots; aantal = aantal+stapgrootte) {
					
					$("#"+stroom+"dot"+aantal).hide();
			}
			
			if (rev) { vanaf = start-1; } else { vanaf = start+1; }
			for (aantal = vanaf; aantal<aantalDots; aantal = aantal+stapgrootte) {
					
					$("#"+stroom+"dot"+aantal).show();
			}
			
			if (rev) { start--; } else { start++; }
			
			if (start == stapgrootte) { start = 0;}

			 
		},snelheid);
	}
	
	function NextPoint(P) {
 
		var x_start = parseInt(lijst[P].split(",")[0]);
		var y_start = parseInt(lijst[P].split(",")[1]);
	
		var x_eind = parseInt(lijst[P+1].split(",")[0]);
		var y_eind = parseInt(lijst[P+1].split(",")[1]);
		
		x_pos = x_start; 
		y_pos = y_start;
		
		var x_afstand = x_eind-x_start;
		var y_afstand = y_eind-y_start;
		
		hoek = Math.atan(y_afstand/x_afstand);
		graden = hoek/(Math.PI/180);
	
		if ((x_afstand <= 0 &&  y_afstand <= 0 ) || (x_afstand < 0 &&  y_afstand > 0 )) { 
			
			graden = graden + 180;
			x_stap = - constant * Math.cos (hoek);  
			y_stap = - constant * Math.sin (hoek);  
		}
		if ((x_afstand > 0 &&  y_afstand < 0 ) || (x_afstand >= 0 &&  y_afstand >= 0 )) { 
			
			x_stap = constant * Math.cos (hoek);  
			y_stap = constant * Math.sin (hoek);  
		}

		x_stappen =  Math.abs( Math.round (x_afstand / x_stap ));
		y_stappen =  Math.abs( Math.round (y_afstand / y_stap ));
		// $('#status').append('stappen : '+x_stappen+' , '+y_stappen+'<br>');
	
		//alert (x_stappen+','+y_stappen);
		

		
	}

	function Plot() {
	
			while (aantalstappen < x_stappen-1 || aantalstappen < y_stappen-1) { 
				
				x_pos =  x_pos + x_stap; 
				y_pos =  y_pos + y_stap;
		
				//$(".transporter").css("left",x_pos+"px").css("top",y_pos+"px");
				verschuiving = 0;
				x = x_pos-5-verschuiving; y = y_pos-5;
				$("#"+stroom).append('<div id="'+stroom+'dot'+aantalDots+'"class="dot" style="left:'+x+'px; top:'+y+'px; display:none"></div>');
				$("#"+stroom+"dot"+aantalDots).css("background","url(images/transporter"+kleur+".png)");
				// if (rev) { $("#dot"+aantalDots).rotate(graden+180); } else { $("#dot"+aantalDots).rotate(graden); }
				
				aantalDots++;
				aantalstappen++;
			
			}
			
			aantalstappen = 0;
			aantalnods++; 
			NewPoint++;
			//alert (NewPoint);
			NextPoint(NewPoint);
			
			//$('#status').append('aantalnods : '+aantalnods+' , lijst.length : '+lijst.length+'<br>');
			
			if (aantalnods < lijst.length-1) { Plot(); } else { 
			
				$('#status').append('START DE ANIMATIE'); 
				iap_Animate ();
			}
	
	}
}

var Links_Rood = new Stroming_hub1 (
	"Cur1_1",	// div
	"420,530#420,777#413,790#397,797#171,798#156,806#149,821#150,1334#158,1350#176,1356#266,1356#159,1737#163,1752#179,1761#341,1761#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	2,		// kleur
	-3 		//stroomsterkte  -10 tot 10;
)
var Links_Zwart = new Stroming_hub1 (
	"Cur1_2",	// div
	"825,1356#932,1731#928,1752#908,1759#752,1760#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	1,		// kleur
	3 		//stroomsterkte  -10 tot 10;
);
var Links_Geel = new Stroming_hub1 (	"Cur1_3",	// div
	"459,530#459,772#466,787#482,795#525,797#541,805#548,818#545,1329#538,1342#523,1348#504,1349#494,1354#489,1364#488,1380#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	0,		// kleur
	3 		//stroomsterkte  -10 tot 10;
	);

// ---------------------------------------

var Rechts_Geel = new Stroming_hub1 (	"Cur2_1",	// div
	"459,530#459,772#466,787#482,795#525,797#541,805#548,818#545,1329#538,1342#523,1348#504,1349#494,1354#489,1364#488,1380#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	0,		// kleur
	-3 		//stroomsterkte  -10 tot 10;
	);

var Rechts_Zwart = new Stroming_hub1 (
	"Cur2_2",	// div
	"498,530#497,755#505,769#525,776#921,777#940,785#947,801#947,1334#940,1347#921,1356#825,1356#932,1731#928,1752#908,1759#752,1760#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	1,		// kleur
	3 		//stroomsterkte  -10 tot 10;
);
/*
var Rechts_Zwart = new Stroming_hub1 (
	"Cur2_2",	// div
	"825,1356#932,1731#928,1752#908,1759#752,1760#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	1,		// kleur
	3 		//stroomsterkte  -10 tot 10;
);
*/
var Rechts_Rood = new Stroming_hub1 (
	"Cur2_3",	// div
	"269,1342#159,1737#163,1752#179,1761#341,1761#0,0".split("#"),
	5,  	// stapgrootte in pixels voor constante snelheid!
 	2,		// kleur
	-3 		//stroomsterkte  -10 tot 10;
);
// var Rood0 = new Stroming ("s3","397,363#402,432#332,470#61,470#0,0".split("#"),5,2,1);




</script>

</body>
</html>
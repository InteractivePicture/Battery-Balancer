
<div id="iap_container_hub1"><img src="images/Hub2.jpg" width="880" height="500" />
  <map name="Map_Hub1">
    <area shape="rect" coords="101,15,187,161" href="#" alt="Chargecontroller">
    <area shape="rect" coords="85,184,220,347" href="#" alt="Multi">
    <area shape="rect" coords="59,358,216,469" href="#" alt="Batterie">
    <area shape="rect" coords="702,340,826,362" href="#" alt="Generation">
    <area shape="rect" coords="703,365,839,386" href="#" alt="Consumption">
    <area shape="rect" coords="702,389,800,410" href="#" alt="Storage">
    <area shape="rect" coords="702,413,852,437" href="#" alt="Feed-in-supply">
  </map>
    <div id="s1_hub1"></div><div id="s2_hub1"></div><div id="s3_hub1"></div><div id="s4_hub1"></div><div id="s5_hub1"></div><div id="s6_hub1"></div>

</div>
<div id="tekst_nav" style="top:2px; left:710px"><a href="javascript:playslide(1);">Overview</a>&nbsp;&nbsp; | &nbsp;&nbsp; Hub 1 &nbsp;&nbsp; | &nbsp;&nbsp;<a href="javascript:playslide(3);">Hub 2</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="javascript:playslide(4);">Hub 3</a></div>

<a href="#"><div class="tekst_prod" style="top:120px;">Charge<br>Controller</div></a>
<a href="#"><div class="tekst_prod" style="top:300px;">Multi</div></a>
<a href="#"><div class="tekst_prod" style="top:440px;">Battery</div></a>
<!--
<div id="status"></div>
-->
<div id="dashboard_hub1" >
	<br>stromen : -10 tot +10 [ dit wordt niet zichtbaar 'natuurlijk' en hoeft niet te kloppen; als het plaatje dat gevoelsmatig maar doet ]<br><br>

    <div class="knoppen" style="background-color: #fff206;">
        <div class="knop" onClick="Wit_hub1(0);" style="cursor: pointer;">-</div>
        <div class="knop" onClick="Wit_hub1(1);" style="cursor: pointer; left:65px;">+</div>
        <div class="waarde" id="waarde0" style="color: #000;"></div>
    </div>
    <div class="knoppen" style="left:200px; background-color: #0382d1;">
		<div class="knop" onClick="Blauw_hub1(0);" style="cursor: pointer;">-</div>
        <div class="knop" onClick="Blauw_hub1(1);" style="cursor: pointer; left:65px;">+</div>
        <div class="waarde" id="waarde1"></div>
    </div>
    <div class="knoppen" style="left:400px; background-color: #f00;">
        <div class="knop" onClick="Rood_hub1(0);" style="cursor: pointer;">-</div>
        <div class="knop" onClick="Rood_hub1(1);" style="cursor: pointer; left:65px;">+</div>
        <div class="waarde" id="waarde2"></div>
    </div>
</div>
<html>
<body>
<title>The Khans</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="style.css" />

</head>
<body onload="startTime()">
<div id="wrapper">
<div id="scanlines"></div>

<div id="header">
<h1>ROBCO INDUSTRIES UNIFIED OPERATING SYSTEM</h1>
<h1>~~HACKED BY THE KHANS~~</h1>
<hr>
</div>
<script language="JavaScript">
if (document.all||document.getElementById)
document.write('<span id="worldclock" style="position: absolute; margin-top: 150px; margin-left: 680px; font-size: 16px;"></span>')

zone=1;
isitlocal=false;
ampm='';

function updateclock(z){
zone=z.options[z.selectedIndex].value;
isitlocal=(z.options[0].selected)?true:false;
}

function WorldClock(){
now=new Date();
ofst=now.getTimezoneOffset()/60;
secs=now.getSeconds();
sec=-1.57+Math.PI*secs/30;
mins=now.getMinutes();
min=-1.57+Math.PI*mins/30;
hr=(isitlocal)?now.getHours():(now.getHours() + parseInt(ofst)) + parseInt(zone);
hrs=-1.575+Math.PI*hr/6+Math.PI*parseInt(now.getMinutes())/360;
if (hr < 0) hr+=24;
if (hr > 23) hr-=24;
ampm = (hr > 11)?"PM":"AM";
statusampm = ampm.toLowerCase();

hr2 = hr;
if (hr2 == 0) hr2=12;
(hr2 < 13)?hr2:hr2 %= 12;
if (hr2<10) hr2="0"+hr2

var finaltime=hr2+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs)+' '+statusampm;

if (document.all)
worldclock.innerHTML=finaltime
else if (document.getElementById)
document.getElementById("worldclock").innerHTML=finaltime
else if (document.layers){
document.worldclockns.document.worldclockns2.document.write(finaltime)
document.worldclockns.document.worldclockns2.document.close()
}


setTimeout('WorldClock()',1000);
}

window.onload=WorldClock
</script>
<div id="menu">
<ul>
<li><a href="index.php?page=main">> MAIN</a></li>
<li><a href="index.php?page=site">> SITE</a></li>
<li><a href="index.php?page=forum">> FORUM</a></li>
<li><a href="index.php?page=screens">> SCREENS</a></li>
<li><a href="index.php?page=videos">> VIDEOS</a></li>
<li><a href="index.php?page=music">> MUSIC</a></li>
<li><a href="index.php?page=store">> STORE</a></li>
</ul>
</div>
<div id="main">
<?php
$commands = array("snl","site","forum","screens","main","help","commands","upload_virus","ttt","bisonthebastard","user_meng","store","chess","videos","user_soul","music"); $f = isset($_GET['page']) ? $_GET['page'] : 'main';

if (in_array($f, $commands)) {
	include "pages/$f.php";
} else {
	include "pages/error.php";
}
?>
</div>
<div class="divider">
  <hr class="left"/>COMMAND-LINE<hr class="right" />
</div>
<div id="console">

<form action="index.php" method="get" >
>&nbsp;<input type="text" name="page" value="" autofocus="on" autocomplete="off"><br>
</form>
</div>
</div>

</body>
</html> 
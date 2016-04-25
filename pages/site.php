<div id="teksti"> 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>
    <script>
function radioON() {
    var myWindow = window.open("http://khanscentral.com/kpr/radio.php?ch=000", "", "width=615, height=385,menubar=no,status=no,titlebar=no,toolbar=no");
}
</script>
    </div>
<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(100)
                             .withMinimumSpeed(90)
                             .withMaximumSpeed(100)
                             .build();
  tw.put('')
    .waitRange(0, 100)
	.put ('<h1><a target="_blank" href="http://www.khanscentral.com/new/">The Khans Website</a></h1>')
		.waitRange(100,200)
	.type ('The Khans main website.')
	.put('<br/>')
	.type ('Here you will find some of our history, our members and news.')
	.put('<br/>')
	.put('<br/>')
	.waitRange(100,200)
	.put ('<h1><a target="_blank" href="http://www.khanscentral.com/index3.html">The Khans old website</a></h1>')
		.waitRange(100,200)
	.type('Old Website Created by Viren in 2000 for Fallout Tactics.')
	.put ('<br/>')
		.waitRange(100,200)
	.type ('(Site No longer used, Archive use only.)')
	.put('<br/>')
	.put('<br/>')
	.waitRange(100,200)
	.put('<h1><a href="javascript:radioON();">Raid-boy 2500</a></h1>')
	.type('Raid-boy 2500, every wastelanders tool for listening to Khans propaganda and Thunderdome-TV.');
</script>

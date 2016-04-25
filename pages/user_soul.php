<audio id="my_audio" src="http://rapakivi.kantsu.fi/sharex/idiot.mp3" loop="loop"></audio>
<script>
$(document).ready(function() {
    $("#my_audio").get(0).play();
});
</script>
<style>
#usrimg {
	position: absolute;
	top: 110px;
	left: 20px;
}
#teksti{
	margin-top: 10px;
	font-size: 12px;
}
</style>
<div id="usrimg"><img src="http://rapakivi.kantsu.fi/sharex/Shit.png" width="160"></div>
<div id="teksti"> 
 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(100)
                             .withMinimumSpeed(100)
                             .withMaximumSpeed(100)
                             .build();
							 tw.put('')
    .waitRange(50, 50)
	.type ('Unforgiving Soul is a dirty scrub.')
	.put('<br/>');
</script>

</div>
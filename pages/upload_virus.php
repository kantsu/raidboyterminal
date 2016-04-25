<audio id="my_audio" src="laugh.ogg" loop="loop"></audio>
<script>
$(document).ready(function() {
    $("#my_audio").get(0).play();
});
</script>
<div id="teksti"> 
 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret">&nbsp;</span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(80)
                             .withMinimumSpeed(60)
                             .withMaximumSpeed(100)
                             .build();
  tw.put('<img src="virus.gif" height="150px" width="150px">')
    tw.put('<img src="virus.gif" height="150px" width="150px">')
	  tw.put('<img src="virus.gif" height="150px" width="150px">')
  .put ('<br/>')
    .waitRange(0, 100)
	.type ('haHahahaHAhahaHAhaHAhhahaHAHaHAhahhaHAHahaha')
	.put('<br/>')
	.type ('haHaHAHAHAhahahAHAHAhahhaHAHaHAhahhaHAHaHAHa')
		.put('<br/>')
	.type ('HAHAhAHHAHahahaHAHAhahaHAHAhahahAHAahhahaHAH')
		.put('<br/>')
	.type ('AAHAhahAHAahahahaHAHAhahaHAHAHahahahaHAHAhaH')
		.put('<br/>')
	.type ('AahahAHAHHAhaahaHAHAHAhahaHAHAHahahAHAHAHAHA')
		.put('<br/>')
	.type ('ahaAHAhahAHAhahaHAHAHAhahahahaHAHAHAhahahaHA')
		.put('<br/>')
	.type ('AAAAAAhaahahAHAHAhahaHAhAHAHAhahahaHAHAahahH')
		.put('<br/>')
	.type ('haHahahaHAhaHAHaHAhaHAhahaHAHAHAHAHAhahahaha')
	.put('');
</script>
</div>
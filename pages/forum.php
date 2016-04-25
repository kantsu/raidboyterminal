<div id="teksti"> 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(100)
                             .withMinimumSpeed(90)
                             .withMaximumSpeed(100)
                             .build();
  tw.put('')
		.waitRange(200,300)
	.put ('<h1><a target="_blank" href="http://forum.khanscentral.com">The Khans Forums</a><h1>')
		.waitRange(200,300)
	.type('Here lies the heart of Raider Command.')
	.put('<br/>')
	.type('New forums are still undergoing work.')
		.waitRange(200,300)
	.put ('<h1><a target="_blank" href="http://forum.khanscentral.com/viewforum.php?f=4">Vault 21 Archives</a><h1>')
		.waitRange(200,300)
	.type('Here lies the collective Archives of various Khan activities.')
	.put('<br/>');
</script>
</div>

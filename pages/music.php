<div id="teksti"> 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>
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
	.put ('<h1><a target="_blank" href="http://music.khanscentral.com">The Khans Raider Whorepunk</a></h1>')
	.type ('This is the Raider Whorepunk main website, get your fix here!');
</script>

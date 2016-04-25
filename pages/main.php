<div id="teksti">   
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(100)
                             .withMinimumSpeed(200)
                             .withMaximumSpeed(200)
                             .build();
  tw.put('')
    .waitRange(0, 100)
	.type('The Khans')
		.waitRange(500,500)
		    .put('<br/>')
	.type('Founded 9.1.00 by Viren')
		.waitRange(500,500)
	    .put('<br/>')
	    .put('<br/>')
    .type('The Khans are an international and merciless organization of raiders, hell bent on pillaging everything in the wasteland.')
    .put('<br/>')
   .put('<br/>')
	.waitRange(200,300)
    .type('Dirty, Mean, and most importantly, RUDE. We are here to Kill people, take their stuff, and laugh about it after.')
    .put('<br/>')
   .put('<br/>')
    .type('Such Raids include Fallout Tactics, Neocron, Starwars Galaxies, World Of Warcraft, FOnline 2238 and FOnline Reloaded')
    .put('<br/>');
</script>

</div>

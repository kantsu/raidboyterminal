<div id="teksti" style="height:100px">  
  <span id="typewriter" class="typewriter"></span>
  <span class="caret">&nbsp;</span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(99)
                             .withMinimumSpeed(30)
                             .withMaximumSpeed(40)
                             .build();
  tw.put('')
    .waitRange(0, 100)
    .type('Available commands:')
    .put('<br/>')
    .put('<br/>')
	.waitRange(200,300)
    .type('main // MAIN PAGE')
    .put('<br/>')
	.waitRange(200,300)
    .type('site // NEW KHANS WEBSITE')
    .put('<br/>')
	.waitRange(200,300)
    .type('forum // THE KHANS FORUM')
    .put('<br/>')
	.waitRange(200,300)
    .type('screens // SCREENSHOTS AND PROPAGANDA')
	.waitRange(200,300)
    .put('<br/>')
	.put('<br/>')
	.type('All commands are lower-case.');
</script>
</div>

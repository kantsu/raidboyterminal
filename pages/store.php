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
	.put ('<h1><a target="_blank" href="http://shop.spreadshirt.com/thekhans/">The Khans Store</a></h1>')
		.waitRange(100,200)
	.type ('The Khans Store.')
	.put('<br/>')
	.type ('Support your local raiders, buy the merchandise!')
	.put('<br/>');
</script>

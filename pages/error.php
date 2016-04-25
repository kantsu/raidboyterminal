
<div id="teksti" style="height:100px; position: absolute;">  
  <span id="typewriter" class="typewriter"></span>
  <span class="caret">&nbsp;</span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(99)
                             .withMinimumSpeed(20)
                             .withMaximumSpeed(30)
                             .build();
  tw.put('')
    .waitRange(0, 100)
    .type('Error! Invalid command!')
    .put('<br/>')
    .waitRange(0, 100)
    .type('Check your spelling!')
    .put('<br/>')
    .put('<br/>')
    .waitRange(0, 100)
    .type('For available commands, type help or commands');
</script>
</div>

<script>
$(function(){  // $(document).ready shorthand
 $('#kuvia').hide().fadeIn(6000);
});
</script>
<div id="teksti" style="height:100px">

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
    .type('Loot from raids, Khan creations, and other member submissions will be found here. Artwork, Propaganda, Screenshots and newspapers.');
</script>
<br><br>
<link href="jquery/js/jquery.slimbox2/jquery.slimbox2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/js/jquery.slimbox2/jquery.slimbox2.js"></script>
<script type="text/javascript" src="jquery/js/jquery.blockUI.js"></script>	
<link href="jquery/css/pwi.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery/js/jquery.pwi.js"></script><script type="text/javascript">// <![CDATA[
$(document).ready(function(){$("#kuvia").pwi({username:'thekhansfaction'});});
// ]]></script></code>
<div id="kuvia">
</div>
</div>
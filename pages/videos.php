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
	.put('<h1><a target="_blank" href="https://www.youtube.com/watch?v=r40JHKMyyVk&list=PLefyKWvmiUvBtnOcWL2fMZBXoiaFucyKb">Random Compilation</a></h1>')
    .type('A compilation of various Khan videos.')
	.put('</br>')
		.put('</br>')
	.put('<h1><a target="_blank" href="https://youtu.be/fGGcksLV0xE?list=PLWIxeC0zZOb8-DtE-8Ti3368aheeVD7-H">Town Control</a></h1>')
    .type('A collection of TC orientated videos showing The Khans in action.')
	.put('</br>')
		.put('</br>')
	.put('<h1><a target="_blank" href="https://youtu.be/yjMiLQUACjE?list=PLWIxeC0zZOb8cwG87Uv87-ctjhyHiXtDP">ThunderDome</a></h1>')
    .type('A collection of videos show casing The Khan traditional Arena. Two men enter, one man leaves.');
</script>
</div>
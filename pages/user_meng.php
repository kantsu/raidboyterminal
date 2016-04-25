<style>
#usrimg {
	position: absolute;
	top: 145px;
	left: -190px;
}
#teksti{
	margin-top: 10px;
	font-size: 12px;
}
</style>
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
	.type('The tale of the Mengelator')
	.put('<br/>')
	.type('Fleeing from a 1940s Germany in flames olde Doc set up practice in latin america, refered to as Dr. Mengelito by the locals.')
	.waitRange(100,200)
	.put('<br/>')
	.type('Risen as a ghoul after the bombs fell the good doctor slowly made his way across the Mexican Gulf together with a few followers.')
	.waitRange(100,200)
	.put('<br/>')
	.type('The years passed and in 2238 he started a career as a slaver in the Modoc region together with his old friend John Newton, until that fateful day that he met the Khan Raiders during one of his business-trips to the Hub.')
	.put('<br/>')
	.put('<br/>')
	.type('They put a shotgun in his hand and gave him a choice, to kill or be killed. The olde Doc with nothing to loose let the shotgun rip the life out of his enemy and said:')
	.waitRange(500,800)
	.put('<br/>')
	.type('"Say ')
	.waitRange(300,300)
	.type('hello ')
	.waitRange(300,300)
	.type('to ')
	.waitRange(300,300)
	.type('the ')
	.waitRange(300,300)
	.type('ravens..."')
	.waitRange(300,300)
	.put('<br/>')
	.type('When the Khan Raiders moved on the olde Doc kept the flame alive under the leadership of the supermutantesque Chieftain Sven until that fateful day that the poor Doc was ripped to pieces by Deathclaws.')
	.put('<br/>')
	.put('<br/>')
	.waitRange(100,200)
	.type('Puzzled together when the Khan Raiders returned, an operation overseen by General M. Bison himself, the olde Doc rose as a charismatic cyborg overlord - a Perfect Champion of Bisonopolis guarding the gates now as The Mengelator, with only the spark of life left of his humanity, he quickly rose to 3rd in Command.')
	.put('<br/>');
</script>

</div>
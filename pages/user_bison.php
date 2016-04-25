<audio id="my_audio" src="./pages/media/bison.ogg" loop="loop"></audio>
<script>
$(document).ready(function() {
    $("#my_audio").get(0).play();
});
</script>
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
<div id="usrimg"><img src="./pages/media/bison.png" width="160"></div>
<div id="teksti"> 
 
  <span id="typewriter" class="typewriter"></span>
  <span class="caret"></span>
<script type="text/javascript" src="build/typewriter-bundle.js"></script>

<script type="text/javascript">
  var typewriter = require('typewriter');

  var twSpan = document.getElementById('typewriter');

  var tw = typewriter(twSpan).withAccuracy(100)
                             .withMinimumSpeed(500)
                             .withMaximumSpeed(500)
                             .build();
							 tw.put('')
    .waitRange(50, 50)
	.type ('Bison was but a child when the first bombs fell..')
	.put ('<br>')
	.type('Starving and alone he was discovered by a group of military survivors that took him in... After a few years he was causing some serious concerns and was often referred to as a uncontrolled megalomaniac with a lust for blood. ')
	.put ('<br>')
	.type('Bison felt that curing and rescuing survivors was a waste of resources and was eventually exiled by Commander Bryan after Bison was found wearing a necklace made of ears. On that day Bison swore that he would take his revenge.')
	.put ('<br><br>')
	.type ('Several weeks past before Bison launched his sneak attack on one of the patrols lead by commander Bryan. Bison savagely killed Bryan and his officers using his "physco power" ability. After that with no one to stop him Bison took control and renamed the military regiment to Shadaloo and promoted himself to the self proclaimed rank of General. Bison often referred to him self in third person and spoke of world domination. Launching attacks on local communities controlled by The New California Republic wiping out entire families and doing numerous deals for arms, drugs and post war technology it was not long before The Brotherhood of steel was forced to take action. ')
	.put('<br>')
	.type ('After a year of fearce fighting Shadaloo was surrounded and besieged by BOS and NCR... Bison drilled up his troops for a final confrontation with Guile, a BOS Officer. Outnumbered and outgunned Bison broke out his secret weapon where he was granted lightning powers and the ability to fly, both provided through his tech suit and life support system. However, M. Bison is defeated by Guile and apparently perished during the destruction of his own base. In an after explosion, however, Bisons hand smashes through the rubble of his base. ')
	.put('<br/>');
</script>

</div>
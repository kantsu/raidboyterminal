<meta charset="utf-8">
<script>

// aliases and constants
function $(i){return document.getElementById(i)}
String.prototype.U=String.prototype.charCodeAt;M=Math.random;W=setTimeout;X=10;Q=15;H=1e4


// 1K chess (1024 bytes)
function F(c,h,e,S,s){if(c<9){c^=8;for(var T,o,L,E,D,O=20,N=-1e8,d=e&&F(c)>H,K=78-S<<9,a=c?X:-X,G,n,g,C,R,A;O++<98;)if((o=I[T=O])&&(G=o&Q^c)<7){A=G--&2?8:4;C=9-o&Q?l[61+G]:49;do{R=I[T+=l[C]];g=D=G|T+a-h?0:h;if(!R&&G|A<3|g||(1+R&Q^c)>9&&G|A>2){if(!(2-R&7))return K;for(E=n=G|I[T-a]-7?o&Q:6^c;E;E=!E&!d&&!(g=T,I[D=T<O?g-3:g+2]<Q|I[D+O-T]|I[T+=T-O])){L=(R&&l[R&7|32]*2-S-G)+(G?0:n-o&Q?110:(D&&14)+(A<2)+1);if(e>S||1<e&e==S&&L>2|d){I[T]=n,I[g]=I[D],I[O]=D?I[D]=0:0;L-=F(c,E=G|A>1?0:T,e,S+1,L-N);if(!(S|e-1|B-O|T-b|L<-H))return F(B=b),y=E,c&&W("F(8,y,2,0),F(8,y,1,0)",O);E=1-G|A<7|D|!e|R|o<Q||F(c)>H;I[O]=o;I[T]=R;I[D]=I[g];D?I[g]=G?0:9^c:0}if(L>N|!S&L==N&M()*2)if(N=L,e>1)if(S?s<L:(B=O,b=T,0))return N}}}while(!R&G>2||(T=O,G|A>2|Q<o&!R&&++C*--A))}return 768-K<N|d&&N}for(i=20;i<98;$(i).innerHTML="&#"+(I[i]&Q?9808+l[67+(I[i]&Q)]:9)+";")$(i+=i%X-8?1:3).lang=i-B}for(B=y=0,I=[],l=[];B<120;I[B++]=B%X?B/X%X<2|B%X<2?7:B/X&4?0:l[y++]:7)l[B]="ustvrtsuqqqqqqqqyyyyyyyy}{|~z|{}@G@TSb~?A6J57IKJT576,+-48HLSUmgukgg OJNMLK  IDHGFE".U(B)-64


</script>

<style>


p span { white-space:nowrap }
a { color:#385bc2; text-decoration:none }
a:hover { color:#b53b3b }

div#info { padding:0 .5em;border:thin solid #385bc2; border-radius:.5em}

// table { margin:0 auto 1em }
td { width:1.04em; height:1.04em; overflow:hidden; font:3em/1 "MS Gothic","Segoe UI Symbol","DejaVu Sans"; background:transparent }
tr:nth-child(odd) td:nth-child(even), tr:nth-child(even) td:nth-child(odd) { background:rgba(0, 0, 0, 0.65) }
table { margin-top:-5px; }
td { font-size:2.3em; cursor:pointer }
td[lang='0'] { outline:thin solid #a00; color:#800 }

@media (min-width:40em) {
   table { border:solid #1BCB7A; border-width:3px 3px }
   .ad_mobile { display:none }
}
@media (max-width:40em) {
   body { width:100% }
   p#menu small { display:none }
   div#info { margin-left:.5em; margin-right:.5em }
   table { box-shadow:.05em .05em .1em #666 }
   .side_ads { display:none }
}
</style>

<body>

<table>
<tr><td onclick="I[b=21]&8?F(B=b):F(0,y,1,0)" id="21">♜<td onclick="I[b=22]&8?F(B=b):F(0,y,1,0)" id="22">♞<td onclick="I[b=23]&8?F(B=b):F(0,y,1,0)" id="23">♝<td onclick="I[b=24]&8?F(B=b):F(0,y,1,0)" id="24">♛<td onclick="I[b=25]&8?F(B=b):F(0,y,1,0)" id="25">♚<td onclick="I[b=26]&8?F(B=b):F(0,y,1,0)" id="26">♝<td onclick="I[b=27]&8?F(B=b):F(0,y,1,0)" id="27">♞<td onclick="I[b=28]&8?F(B=b):F(0,y,1,0)" id="28">♜<tr><td onclick="I[b=31]&8?F(B=b):F(0,y,1,0)" id="31">♟<td onclick="I[b=32]&8?F(B=b):F(0,y,1,0)" id="32">♟<td onclick="I[b=33]&8?F(B=b):F(0,y,1,0)" id="33">♟<td onclick="I[b=34]&8?F(B=b):F(0,y,1,0)" id="34">♟<td onclick="I[b=35]&8?F(B=b):F(0,y,1,0)" id="35">♟<td onclick="I[b=36]&8?F(B=b):F(0,y,1,0)" id="36">♟<td onclick="I[b=37]&8?F(B=b):F(0,y,1,0)" id="37">♟<td onclick="I[b=38]&8?F(B=b):F(0,y,1,0)" id="38">♟<tr><td onclick="I[b=41]&8?F(B=b):F(0,y,1,0)" id="41"><td onclick="I[b=42]&8?F(B=b):F(0,y,1,0)" id="42"><td onclick="I[b=43]&8?F(B=b):F(0,y,1,0)" id="43"><td onclick="I[b=44]&8?F(B=b):F(0,y,1,0)" id="44"><td onclick="I[b=45]&8?F(B=b):F(0,y,1,0)" id="45"><td onclick="I[b=46]&8?F(B=b):F(0,y,1,0)" id="46"><td onclick="I[b=47]&8?F(B=b):F(0,y,1,0)" id="47"><td onclick="I[b=48]&8?F(B=b):F(0,y,1,0)" id="48"><tr><td onclick="I[b=51]&8?F(B=b):F(0,y,1,0)" id="51"><td onclick="I[b=52]&8?F(B=b):F(0,y,1,0)" id="52"><td onclick="I[b=53]&8?F(B=b):F(0,y,1,0)" id="53"><td onclick="I[b=54]&8?F(B=b):F(0,y,1,0)" id="54"><td onclick="I[b=55]&8?F(B=b):F(0,y,1,0)" id="55"><td onclick="I[b=56]&8?F(B=b):F(0,y,1,0)" id="56"><td onclick="I[b=57]&8?F(B=b):F(0,y,1,0)" id="57"><td onclick="I[b=58]&8?F(B=b):F(0,y,1,0)" id="58"><tr><td onclick="I[b=61]&8?F(B=b):F(0,y,1,0)" id="61"><td onclick="I[b=62]&8?F(B=b):F(0,y,1,0)" id="62"><td onclick="I[b=63]&8?F(B=b):F(0,y,1,0)" id="63"><td onclick="I[b=64]&8?F(B=b):F(0,y,1,0)" id="64"><td onclick="I[b=65]&8?F(B=b):F(0,y,1,0)" id="65"><td onclick="I[b=66]&8?F(B=b):F(0,y,1,0)" id="66"><td onclick="I[b=67]&8?F(B=b):F(0,y,1,0)" id="67"><td onclick="I[b=68]&8?F(B=b):F(0,y,1,0)" id="68"><tr><td onclick="I[b=71]&8?F(B=b):F(0,y,1,0)" id="71"><td onclick="I[b=72]&8?F(B=b):F(0,y,1,0)" id="72"><td onclick="I[b=73]&8?F(B=b):F(0,y,1,0)" id="73"><td onclick="I[b=74]&8?F(B=b):F(0,y,1,0)" id="74"><td onclick="I[b=75]&8?F(B=b):F(0,y,1,0)" id="75"><td onclick="I[b=76]&8?F(B=b):F(0,y,1,0)" id="76"><td onclick="I[b=77]&8?F(B=b):F(0,y,1,0)" id="77"><td onclick="I[b=78]&8?F(B=b):F(0,y,1,0)" id="78"><tr><td onclick="I[b=81]&8?F(B=b):F(0,y,1,0)" id="81">♙<td onclick="I[b=82]&8?F(B=b):F(0,y,1,0)" id="82">♙<td onclick="I[b=83]&8?F(B=b):F(0,y,1,0)" id="83">♙<td onclick="I[b=84]&8?F(B=b):F(0,y,1,0)" id="84">♙<td onclick="I[b=85]&8?F(B=b):F(0,y,1,0)" id="85">♙<td onclick="I[b=86]&8?F(B=b):F(0,y,1,0)" id="86">♙<td onclick="I[b=87]&8?F(B=b):F(0,y,1,0)" id="87">♙<td onclick="I[b=88]&8?F(B=b):F(0,y,1,0)" id="88">♙<tr><td onclick="I[b=91]&8?F(B=b):F(0,y,1,0)" id="91">♖<td onclick="I[b=92]&8?F(B=b):F(0,y,1,0)" id="92">♘<td onclick="I[b=93]&8?F(B=b):F(0,y,1,0)" id="93">♗<td onclick="I[b=94]&8?F(B=b):F(0,y,1,0)" id="94">♕<td onclick="I[b=95]&8?F(B=b):F(0,y,1,0)" id="95">♔<td onclick="I[b=96]&8?F(B=b):F(0,y,1,0)" id="96">♗<td onclick="I[b=97]&8?F(B=b):F(0,y,1,0)" id="97">♘<td onclick="I[b=98]&8?F(B=b):F(0,y,1,0)" id="98">♖</table>

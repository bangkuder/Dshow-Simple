<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

header("Location: index.php");  } 

else { 

 include('header.php'); ?>
<div class="timer-area" style="position:relative">
<h1><span style="font-size: 32px;">D’Show live acoustic session Featuring IPANG</span></br>
<span style="font-size: 18px;">24 Mei 2013 Pukul 20:00 di Nutz Culture, Senayan City, Jakarta</span> </h1>
	<p style="font-size: 14px"> Registrasi untuk mendapatkan undangan dimulai tanggal 13 -17 mei 2013</p>
	<div id="isi">						
							<div id="box" class="left"> <div class="content">Anda Sudah Like Dapurpacu.com </div></div>							
							<div id="box-not" class="left"><div class="content">
							<div id="tweet"><a href="https://twitter.com/DapurPacu" class="twitter-follow-button" data-show-count="false">Follow @DapurPacu</a></div>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<a href="https://www.facebook.com/dapurpacu" target="_blank"><img src="images/dp-like.jpg" /></a>
							<div class="fb-like" data-href="http://facebook.com/dapurpacu" data-send="false" data-layout="box_count" data-width="300" data-show-faces="false"></div>
							</div>
							</div>
						
							<div id="box2" ><div class="content2">Anda Sudah Like Ganlob.com</div></div>								
							<div id="box2-not" class="right"><div class="content2">
							<div id="tweet"><a href="https://twitter.com/Ganlobcom" class="twitter-follow-button" data-show-count="false">Follow @Ganlobcom</a></div>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<a href="https://www.facebook.com/ganlobcom" target="_blank"><img src="images/ganlob-like.jpg" /></a>	
							<div class="fb-like" data-href="http://facebook.com/ganlobcom" data-send="false" data-layout="box_count" data-width="300" data-show-faces="false"></div>						
							</div>
							</div>	
	</div>
	
	<div id="fieldset"><?php include('form.php') ?></div></div>
</div>
</div>
<?php include('footer.php'); } ?>
<?php include 'header.php'; ?>
<?php 
session_start();
session_destroy();
?>
		<div class='ipang'></div>
		<div id="panel">
						<div id="text" align="center"> Dapatkan undangan terbatas sebanyak 50 ticket
							<br>cukup dengan like facebook dapurpacu.com dan ganlob.com serta follow twitternya </div>
						<div id="login">Anda Belum terhubung ke Facebook silahkan<a href="#" > Login </a> . 
						<br><span style="font-family: Arial; font-size: 12px"> Reload halaman ini setelah login <a href="#" onClick="window.location.reload()" > reload </a> </span> </div>
						<div id="isi">
						
							<div id="box" class="left"> <div class="content">Anda Sudah Like Dapurpacu.com </div></div>							
							<div id="box-not" class="left"><div class="content">
							<div id="tweet"><a href="https://twitter.com/DapurPacu" class="twitter-follow-button" data-show-count="false">Follow @DapurPacu</a></div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<a href="https://www.facebook.com/dapurpacu" target="_blank"><img src="image/dp-like.jpg" /></a>
							</div>
							</div>
						
							<div id="box2" ><div class="content2">Anda Sudah Like Ganlob.com</div></div>								
							<div id="box2-not" class="right"><div class="content2">
							<div id="tweet"><a href="https://twitter.com/Ganlobcom" class="twitter-follow-button" data-show-count="false">Follow @Ganlobcom</a></div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<a href="https://www.facebook.com/ganlobcom" target="_blank"><img src="image/ganlob-like.jpg" /></a>							
							</div>
							</div>			
							
						</div>
						<div align="center" class="crumb"> reload halaman setelah like facebook dan follow twitter untuk membuka form </div>
					<div id="fieldset">
						<form id="formulir" action="register.php" method="POST">
    							<div class='choice'>
							<h3> Isi Data Diri Kamu</h3><br>
							<div class='left' style="width: 150px; display: block">
							Nama </br>
							<br> 
							Email </br>
							<br> 
							Nama Akun Facebook </br>
							<br> 
							Nama Akun Twitter </br>
							<br> 
							Nomor Mobile </br>
							<br>
							</div>
							<div class='left' style="width: 200px; display: block;">
							<input type="text" name="Nama"></br>
							<br>
							<input type="text" name="email"></br>
							<br>
							<input type="text" name="facebook"></br>
							<br>
							<input type="text" name="twitter"></br>
							<br>
							<input type="text" name="mobile"></br>
							</br>
							<input type="submit" name="submit" class="but-sub" id="submit" value=" Kirim " />    
							</div>	
							<br>
       						
						</form>

						</div>
					</div>

					</div>
			<div id="panel-inv"> <h3> test </h3> </div>
			<div id="panel-con"> <h3> TERM & CONDITION </h3> </div>
			<div id="panel-ven"><h3> VENUE MAP <br> </h3><div id="map" align="center"> <iframe width="640" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Nutz+Culture,+Senayan+City+Mall,+Jl.+Asia+Afrika+Lot-19,+Senayan,+Jakarta,+Indonesia&amp;aq=0&amp;oq=nut&amp;sll=37.0625,-95.677068&amp;sspn=40.052282,86.572266&amp;ie=UTF8&amp;hq=Nutz+Culture,+Senayan+City+Mall,+Jl.+Asia+Afrika+Lot-19,&amp;hnear=Senayan,+Jakarta+Selatan,+Jakarta,+Jakarta+Capital+Region,+Indonesia&amp;t=m&amp;ll=-6.20,106.74801&amp;spn=0.01,0.01;&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Nutz+Culture,+Senayan+City+Mall,+Jl.+Asia+Afrika+Lot-19,+Senayan,+Jakarta,+Indonesia&amp;aq=0&amp;oq=nut&amp;sll=37.0625,-95.677068&amp;sspn=40.052282,86.572266&amp;ie=UTF8&amp;hq=Nutz+Culture,+Senayan+City+Mall,+Jl.+Asia+Afrika+Lot-19,&amp;hnear=Senayan,+Jakarta+Selatan,+Jakarta,+Jakarta+Capital+Region,+Indonesia&amp;t=m&amp;ll=-6.228251,106.79801&amp;spn=0.01,0.01;&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small></small></small></div></div>
			</div>		
		</div>		
	</div>		
	
<?php include 'footer.php'; ?>
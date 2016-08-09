<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

header("Location: index.php");  } 

else {?>
						<form id="formulir" action="register.php" method="POST">
    							<div class='choice'>
							<h3> Isi Data Diri Kamu</h3></br>
							<div class='left'>
							<p><label for='nama'>Nama</label><input type="text" name="Nama">
							</p>
						
							<p><label for='id'>Nomor KTP/SIM</label><input type="text" name="user_id"></p>
										
							<p><label for='email'>Email</label><input type="text" name="email"></p>
						
							<p><label for='facebook'>Nama Akun Facebook</label><input type="text" name="facebook"></p>
						
							<p><label for='twitter'>Nama Akun Twitter</label><input type="text" name="twitter"></p>
					
							<p><label for='mobile'>Nomor Handphone</label><input type="text" name="mobile"></p>	
							<input type="submit" name="submit" class="but-sub" id="submit" value=" Kirim " />    
							  		</div>   						
						</form>
<?php } ?>

				

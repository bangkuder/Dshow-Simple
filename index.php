
	
<?php include('header.php'); ?>
	<!-- TIMER -->
	<div class="timer-area">
		<h1><span style="font-size: 32px;">D’Show live acoustic session Featuring IPANG</span></br>
<span style="font-size: 18px;">24 Mei 2013 Pukul 20:00 di Nutz Culture, Senayan City, Jakarta</span> </h1>
		<br><p style="font-size: 14px"> Registrasi untuk mendapatkan undangan dimulai tanggal 13 -17 mei 2013</p>
		<?php
		$hostname_conn_vote = "192.168.5.227:3535";
		$database_conn_vote = "dshow";
		$username_conn_vote = "beta_User";
		$password_conn_vote = "passbet4";
		$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
		mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());

		$short = mysql_query("SELECT * FROM data WHERE id='20' OR id='35' OR id='50' OR id='70' OR id='90' OR id='100' OR id='110' OR id='120' OR id='130' OR id='138' OR id='139' OR id='140' OR id='141' OR id='142' OR id='143' OR id='144' OR id='145' OR id='146' OR id='147' OR id='148' OR id='149' OR id='150' OR id='151' OR id='152' OR id='153' ");
		$rows = mysql_num_rows($short);
		$invi = 25-$rows;
	
		if($invi !=0){
				define('IS_IN_SCRIPT',1); 
				include('reg.php');
		} else {
			include('reg2.php');
		}
		?>	
		
		<!-- SIGNUP -->
	<div class="container">
	<p style="font-size: 14px; font-weight: bold"> Like our Facebook Fans Page And Follow Our Twitter to keep updated </p>
	<br><a href="http://dapurpacu.com"><img src="images/logodp.png"/></a><a href="http://Ganlob.com"><img src="images/logo-ganlob.png"/></a>
	<br><a href="http://facebook.com/dapurpacu"><img src="images/fb.png"/></a><a href="https://twitter.com/DapurPacu"><img src="images/twitter.png"/></a><a href="http://facebook.com/ganlobcom"><img src="images/fb.png"/></a><a href="https://twitter.com/ganlobcom"><img src="images/twitter.png"/></a>
	<br><br><a href="how.php"><img src="images/how.png"/></a><a href="term.php"><img src="images/term.png"/></a>
	
	</div> <!-- end container -->
	</div> <!-- end timer-area -->	
	
<?php include('footer.php') ?>
	
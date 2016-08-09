<?php if (!defined('IS_IN_SCRIPT')) {  
  ?><script type="text/javascript">
    history.back();
  </script>
<?php

   exit; 
}  ?>
<div class="timer-container">
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
	?>
	
	<div class='invi-left'> 
	<span class='invi'><?php echo $invi; ?></span><br>
	undangan lagi	
	</div>
	<div class='invi-right'> 
		<a href ="get.php"><img style="margin-top: 15px" src="images/get-invi.jpg"></a>
	</div>
	
</div>

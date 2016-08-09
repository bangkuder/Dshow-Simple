<?php include 'header.php'; ?>
<?

session_start();

$hostname_conn_vote = "localhost";
$database_conn_vote = "dshow";
$username_conn_vote = "beta_User";
$password_conn_vote = "passbet4";
$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());

$a = $_SESSION['Nama'];
$b = $_SESSION['email']; 
$c = $_SESSION['facebook'];
$d = $_SESSION['twitter'];
$e = $_SESSION['mobile'];
$f = $_SESSION['rand'];

$check = mysql_query("SELECT id FROM data WHERE nama = '$a' AND email = '$b' AND facebook = '$c' AND twitter = '$d' AND mobile = '$e' AND number = '$f' ");
while($row = mysql_fetch_array($check)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	 $x = $row['id']; 
	 }

if ($x == 1 ||$x == 3 ||$x == 5 ||$x == 7 ||$x == 9 ||$x == 11 ){
	?>
	<div id="panel-yes"> Selamat anda mendapatkan undangan </br></br> <div class="logo"></div>
				nomor Ticket anda <span style="color:red"><?php echo $f;?></span><span style="font-family: arial; font-size: 18px"><br><br>
				Simpan baik-baik nomor undangan untuk keperluan verifikasi<br>
				anda akan dikonfirmasi via email dan telephone</div></span>
	<?php
} else {
	?>
	<div id="panel-no"> Anda belum mendapatkan undangan <br> <span style="font-family: arial; font-size: 18px">silahkan coba lagi <a style="color:#1d42cc" href="http://beta.dapurpacu.com/dshow/"> klik disini </a></span> </div>
	<?php
}


session_destroy();
?>

</div>
<div id="down">	
	<div id="present"></div>
</div>

</body>
</html>
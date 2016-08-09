<?php
if (!isset($_SERVER['HTTP_REFERER'])){ 

header("Location:index.php"); } 

else {
session_start();
include 'header.php';
		$hostname_conn_vote = "192.168.5.227:3535";
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
$g = $_SESSION['user_id'];

$check = mysql_query("SELECT id FROM data WHERE nama = '$a' AND user_id = '$g'  AND email = '$b' AND facebook = '$c' AND twitter = '$d' AND mobile = '$e' AND number = '$f' ");
while($row = mysql_fetch_array($check)) {

	   // Write the value of the column FirstName (which is now in the array $row)
	 $x = $row['id']; 
	 }

	
	?>
<div class="timer-area">
	<div id="panel-yes"> <img style="margin-top: 70px;" src="images/luck.jpg"/></br>
				 <span style="font-family: arial; font-size: 24px;font-weight: bold">nomor Ticket anda <span style="color:red"><?php echo $f;?></span></span><span style="font-family: arial; font-size: 18px"><br><br>
				Simpan baik-baik nomor undangan untuk keperluan verifikasi<br>
				anda akan dikonfirmasi via email dan telephone oleh kami</div></span>
</div>
	<?php

session_destroy();
?>

</div>
<?php include('footer.php');} ?>
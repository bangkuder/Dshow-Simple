<?

session_start();

$hostname_conn_vote = "localhost";
$database_conn_vote = "dshow";
$username_conn_vote = "beta_User";
$password_conn_vote = "passbet4";
$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());

$Nama= $_POST["Nama"];
$email = $_POST["email"];
$facebook= $_POST["facebook"];
$twitter = $_POST["twitter"];
$mobile = $_POST["mobile"];
$rand = mt_rand(100000,999999); 

$required = array('Nama', 'email', 'facebook', 'twitter', 'mobile');

$error = false;
	foreach($required as $field) {
  		if (empty($_POST[$field])) {
    	$error = true;
  		}
	}

 $_SESSION['Nama'] = $Nama;
 $_SESSION['email'] = $email;
 $_SESSION['facebook'] = $facebook;
 $_SESSION['twitter'] = $twitter;
 $_SESSION['mobile'] = $mobile;
 $_SESSION['rand'] = $rand;

if ($error) {
  		?>
  <script type="text/javascript">
    alert("Data Belum Lengkap");
    history.back();
  </script>
  <?php
	} else {

	$result = mysql_query("SELECT facebook,twitter FROM data WHERE facebook = '$facebook' OR twitter = '$twitter'");
	$num_rows = mysql_num_rows($result);

  	if ($num_rows > 0) {
		?>
 			 <script type="text/javascript">
   			 alert("Akun facebook <?php echo $facebook; ?></strong> atau akun twitter <?php echo $twitter ; ?></strong> sudah terdaftar,<br> silahkan coba lagi besok");
   			 history.back();
 			 </script>
 		 <?php		
	} else {
	
	$insert = "INSERT INTO data	(nama, email, facebook, twitter, mobile, number) VALUES	('$Nama','$email','$facebook','$twitter','$mobile','$rand')";

		if (!mysql_query($insert,$conn_vote))
  			{
  			die('Error: ' . mysql_error());
 			 }
		header("Location: http://beta.dapurpacu.com/dshow/check.php");	
	
	}
}
?>

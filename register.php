<?php
session_start();

$hostname_conn_vote = "192.168.5.227:3535";
		$database_conn_vote = "dshow";
		$username_conn_vote = "beta_User";
		$password_conn_vote = "passbet4";
$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());

$Nama= $_POST["Nama"];
$user_id=$_POST["user_id"];
$email = $_POST["email"];
$facebook= $_POST["facebook"];
$twitter = $_POST["twitter"];
$mobile = $_POST["mobile"];
$rand = mt_rand(100000,999999); 

$required = array('Nama','user_id', 'email', 'facebook', 'twitter', 'mobile');

$error = false;
	foreach($required as $field) {
  		if (empty($_POST[$field])) {
    	$error = true;
  		}
	}

 $_SESSION['Nama'] = $Nama;
 $_SESSION['user_id'] = $user_id;
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

	$result = mysql_query("SELECT facebook,twitter FROM data WHERE user_id = '$user_id' OR nama = '$Nama'");
	$num_rows = mysql_num_rows($result);

  	if ($num_rows > 0) {
		?>
 			 <script type="text/javascript">
   			 alert("Nama <?php echo $Nama; ?> dengan user id <?php echo $user_id ; ?> sudah terdaftar,<br> silahkan coba dengan user id yang lain");
   			 history.back();
 			 </script>
 		 <?php		
	} else {
	
	$insert = "INSERT INTO data	(nama,user_id, email, facebook, twitter, mobile, number) VALUES	('$Nama','$user_id','$email','$facebook','$twitter','$mobile','$rand')";

		if (!mysql_query($insert,$conn_vote))
  			{
  			die('Error: ' . mysql_error());
 			 }
		header("Location: check.php");	
	
	}
}

?>

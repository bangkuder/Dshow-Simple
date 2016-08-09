<?php require_once('include/connect.php'); ?>
<?

$Nama= $_POST["Nama"];
$email = $_POST["email"];
$facebook= $_POST["facebook"];
$twitter = $_POST["twitter"];
$mobile = $_POST["mobile"];

$insert = "INSERT INTO poll
			(Nama, email, facebook, twitter, mobile)
			VALUES
			('$Nama','$email','$facebook','$twitter','$mobile')";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>D'Show</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id='wrapper'>
<div id='header'>
</div>
<div id='isian'>
<br>
<br>
<br>
Terima Kasih Telah ikut berpartisipasi dalam Program ini.
<br>
Nantikan Pengumuman Pemenang Tanggal XXXX
</div>
</div>
</body>
</html>
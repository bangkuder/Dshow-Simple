<?php $password = "admindshow"; ?>
<?php 
  print "<h2 align=\"center\">Pemenang D'Show</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
$hostname_conn_vote = "192.168.5.227:3535";
		$database_conn_vote = "dshow";
		$username_conn_vote = "beta_User";
		$password_conn_vote = "passbet4";
		$conn_vote = mysql_connect($hostname_conn_vote, $username_conn_vote, $password_conn_vote) or die('Can\'t create connection: '.mysql_error());
		mysql_select_db($database_conn_vote, $conn_vote) or die('Can\'t access specified db: '.mysql_error());

		$short = mysql_query("SELECT * FROM data WHERE id='20' OR id='35' OR id='50' OR id='70' OR id='90' OR id='100' OR id='110' OR id='120' OR id='130' OR id='138' OR id='139' OR id='140' OR id='141' OR id='142' OR id='143' OR id='144' OR id='145' OR id='146' OR id='147' OR id='148' OR id='149' OR id='150' OR id='151' OR id='152' OR id='153' ");		echo "<table align='center' border='1'>
			<tr>
			<th>id</th>
			<th>Nama</th>
			<th>user id</th>
			<th>email</th>
			<th>akun facebook</th>
			<th>akun twitter</th>
			<th>handphone</th>
			<th>unique</th>
			</tr>";
		while($row = mysql_fetch_array( $short )) 
 			{ 
 			echo "<tr>";
 			 echo "<td>" . $row['id'] . "</td>";
  			echo "<td>" . $row['nama'] . "</td>";
			echo "<td>" . $row['user_id'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['facebook'] . "</td>";
			echo "<td>" . $row['twitter'] . "</td>";
			echo "<td>" . $row['mobile'] . "</td>";
			echo "<td>" . $row['number'] . "</td>";

 			 echo "</tr>"; 			
			} 
		echo "</table>";
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
 
?>
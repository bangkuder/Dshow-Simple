<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />
<title> D'Show </title>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$(".but").click(function(){
		$("#panel").animate({height:'toggle'},350);
		$(this).toggleClass("active"); return false;
	});	
	 
});
</script>

<script type="text/javascript">
//<![CDATA[ 
$(window).load(function(){

var hideLogin = function(){
   $("#login").hide();
}
    
var showLogin = function(){
   $("#login").show();
   $("#text").hide();
   $("#fieldset").hide();
}

var doLogin = function(){
    FB.login(function(response) {
      if (response.session) {
           hideLogin();
           checkLike(response.session.uid)
      } else {
        // user is not logged in
      }
    });
}
 
var checkLike = function(user_id){
	
    var page_id = "332942881973"; //dp
	var page_id2 = "501996049832823"; //dp
	var fql_query = "SELECT uid FROM page_fan WHERE page_id = "+page_id+"and uid="+user_id;
	    var the_query = FB.Data.query(fql_query);
          
          the_query.wait(function(rows) {
              if (rows.length == 1 && rows[0].uid == user_id) {
                 	//$("#fieldset").show();
			$("#box-not").hide();
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
                  	$("#isi").show();
			$("#box-not").show();
			$("#fieldset").hide();
			$(".crumb").show();
                  //and here you could get the content for a non liker in ajax...
              }
          });    
		  
	var fql_query2 = "SELECT uid FROM page_fan WHERE page_id = "+page_id2+"and uid="+user_id;
		var the_query2 = FB.Data.query(fql_query2);
	          
          the_query2.wait(function(rows) {

              if (rows.length == 1 && rows[0].uid == user_id) {
                     //$(".but-sub").show();
				$("#box2-not").hide();	
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
			$("#isi").show();
                     $("#box2-not").show();
			$("#fieldset").hide();
			$(".crumb").show();
                  //and here you could get the content for a non liker in ajax...
              }
          }); 			
}

$("#fieldset").each(function() {
    if ($(this).css("visibility") == "hidden") {
        $("#isi").show();
    } else {
	$("#isi").hide();
	$(".crumb").hide();
        $(this).show();
    }
});

$(document).ready(function(){
    FB.getLoginStatus(function(response) {
      if (response.status === 'connected') {
        hideLogin();
        checkLike(response.authResponse.userID)
      } else {
        showLogin();
      }
     });    
    $("#login a").click(doLogin);
});

});//]]>  

</script>
</head>
<body>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    appId  : '105138823019044',
    status : true, 
    cookie : true, 
    xfbml  : true  
  });
</script>

	<div id="wrapper">
		<div id="up">
			<div id="head">
				<div class='logo'></div>
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
			</div>		
		</div>		
	</div>	
	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> D'Show Live Acoustic Session Featuring Ipang</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- JS -->
	<script type="text/javascript" src="jquery.js"></script>
	<script src="js/countdown.js"></script>
	
<!--script type="text/javascript">
//<![CDATA[ 
$(window).load(function(){

var hideLogin = function(){
   $("#login").hide();
}
    
var showLogin = function(){
   $("#login").show();
   $("#text").hide();
   $("#fieldset").hide();
   $(".crumb").hide();

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

$(".show-but").click(function() {
 	$("#fieldset").show().load('form.php');
	 $(this).hide();
 }); 
 

});//]]>  

</script-->
	
	<script>
	
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "13 may 2013 10:00:00",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40693123-1', 'dapurpacu.com');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=384802564968320";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    appId  : '384802564968320',
    status : true, 
    cookie : true, 
    xfbml  : true  
  });
</script>
	<!-- LOGO -->
	<header class="container">
		<a href="index.php" id="logo"><img src="images/logo.png" alt="DSHOW ACCOUSTIC" /></a>
	</header>
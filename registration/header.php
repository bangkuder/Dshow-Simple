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
		$(this).toggleClass("active"); 
		$("#panel-inv").hide();
		$("#panel-con").hide();
		$("#panel-ven").hide();
	});	
	 
$(".but-inv").click(function(){
		$("#panel-inv").animate({height:'toggle'},350);
		$(this).toggleClass("active"); 
		$("#panel").hide();
		$("#panel-con").hide();
		$("#panel-ven").hide();
	});

$(".but-con").click(function(){
		$("#panel-con").animate({height:'toggle'},350);
		$(this).toggleClass("active"); 
		$("#panel-inv").hide();
		$("#panel").hide();
		$("#panel-ven").hide();
	});

$(".but-ven").click(function(){
		$("#panel-ven").animate({height:'toggle'},350);
		$(this).toggleClass("active"); 
		$("#panel-inv").hide();
		$("#panel-con").hide();
		$("#panel").hide();
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
				
					
//<![CDATA[ 
$(function(){

var hideLogin = function(){
   $("#login").hide();
}
    
var showLogin = function(){
   $("#login").show();
   $("#text").hide();
   $("#fieldset").hide();
   $(".crumb").hide();
   $(".show-but").hide();
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

$(".show-but").each(function() {
    if ($(this).css("visibility") == "hidden") {
        $("#isi").show();
} else {
	$(".show-but").show();
	$("#isi").hide();
	$(".crumb").hide();
       
    }
});

$(".show-but").click(function() {
 	$("#fieldset").show().load('form.php');
	 $(this).hide();
 }); 
 
var checkLike = function(user_id){
	
    var page_id = "332942881973"; //dp
	var page_id2 = "501996049832823"; //dp
	var fql_query = "SELECT uid FROM page_fan WHERE page_id = "+page_id+"and uid="+user_id;
	    var the_query = FB.Data.query(fql_query);
          
          the_query.wait(function(rows) {
              if (rows.length == 1 && rows[0].uid == user_id) {
                	$("#box-not").hide();
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
                  	$("#isi").show();
			$("#box-not").show();
			$("#fieldset").hide();
			$(".crumb").show();
			$(".show-but").hide();
                  //and here you could get the content for a non liker in ajax...
              }
          });    
		  
	var fql_query2 = "SELECT uid FROM page_fan WHERE page_id = "+page_id2+"and uid="+user_id;
		var the_query2 = FB.Data.query(fql_query2);
	          
          the_query2.wait(function(rows) {

              if (rows.length == 1 && rows[0].uid == user_id) {
                     
				$("#box2-not").hide();	
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
			$("#isi").show();
                     $("#box2-not").show();
			$("#fieldset").hide();
			$(".crumb").show();
			$(".show-but").hide();
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

});//]]>  (jQuery);



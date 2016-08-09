

jQuery(function(){
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
                 	$("#box").show();
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
                  
					$("#box-not").show();
                  //and here you could get the content for a non liker in ajax...
              }
          });    
		  
	var fql_query2 = "SELECT uid FROM page_fan WHERE page_id = "+page_id2+"and uid="+user_id;
		var the_query2 = FB.Data.query(fql_query2);
	          
          the_query2.wait(function(rows) {

              if (rows.length == 1 && rows[0].uid == user_id) {
                  
					$("#box2").show();		
                  //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.                  
              } else {
                  var ganlob = 'no' ;
					$("#box2-not").show();
                  //and here you could get the content for a non liker in ajax...
              }
          }); 	

		
}

var check = function(){
	var someas = div4search.getElementsByTagName('test');
	if (someas == 'yes'){
		$("#coba").text('wakakka');
	}
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

});//]]>  
});
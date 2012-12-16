jQuery(document).ready(function($) {
	
	$(".mainMenuItem").on({
		mouseenter: function(){
    		$(this).find(".submenu").removeClass("fadeOutRight hide").addClass("fadeInLeft").show();
  		},
  		mouseleave: function(){
   			$(this).find(".submenu").removeClass("fadeInLeft").addClass("fadeOutRight");
  		}
	});
});

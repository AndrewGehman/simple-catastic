$(document).ready(function(){ 	
					   
	$("img.swap").on("mouseenter", function(){	
		
		$(this).attr('src', $(this).attr('src').replace('_first', '_second'));
		
		});
		
	$("img.swap").on("mouseleave", function(){

		$(this).attr('src', $(this).attr('src').replace('_second', '_first'));
		
		});	
	
});

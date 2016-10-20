$(document).ready(function() {
	var $ui = $('#sc_box');
	var $down = $('.sb_dropdown')
	
	$ui.click(function(){
		$down.toggleClass("sb_dropdown-open");
		console.log("div apareceu");
	});
			
	$(document).click(function(e){
	    var tar = e.target;
	    
		if(tar.is('body')) {
		    $down.removeClass("sb_dropdown-open");
		}
	});
});
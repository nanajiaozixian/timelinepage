window.onload = function(){
	$("#try_btn").click(function(){
		$("#main_page_container").css("display", "none");
		$("#snapshot_page_container").css("display", "block");
	});
	
	$("#back").click(function(){		
		$("#snapshot_page_container").css("display", "none");
		$("#main_page_container").css("display", "block");
	});
}
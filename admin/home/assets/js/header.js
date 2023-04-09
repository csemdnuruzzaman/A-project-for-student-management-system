$(document).ready(function(){

	$("#bars").click(function(){
		$("nav").slideToggle(1000);
		$(".header-menu .header-bar a i").toggleClass("fa-times");
	}); 

}); 
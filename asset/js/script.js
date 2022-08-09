
$(document).ready(function(){

	var date_input=$('input[name="date"]'); //our date input has the name "date"
	var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	var options={
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: false,
			autoclose: true,
			orientation: "top right",
			};
		date_input.datepicker(options);




});


// =========================================
// full window scoll top
// =========================================
$(window).scroll(function(){

	if($(this).scrollTop()>200){
		$("#gotoup").fadeIn();
	}else{
		$("#gotoup").fadeOut();
	}	
});

$("#gotoup").click(function(){
		$("html, body").animate({scrollTop:0}, 2000);
});




